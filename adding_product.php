<?php
include 'connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$product = $_FILES['product']['name'];

if($product != "")
{
    $ekstensi_diperbolehkan = array('png','jpg');
    $x = explode('.' ,$product);
    $ekstensi = strtolower(end($x));

    $file_tmp = $_FILES['product']['tmp_name'];
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$product;

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  
    {
        move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
        $query = "INSERT INTO product (id, nama, product) VALUES ('$id','$nama', '$nama_gambar_baru')";

        $result = mysqli_query($con, $query);
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($con).
                 " - ".mysqli_error($con));
        } else 
        {
          echo "<script>alert('Data berhasil ditambah.');window.location='about_product.php';</script>";
        }
    }
}
else
{
        $query = "INSERT INTO product (id, nama, product) VALUES ($id','$nama', null)";
    
        $result = mysqli_query($con, $query);
        if(!$result)
        {
            die ("Query gagal dijalankan: ".mysqli_errno($cnn).
            " - ".mysqli_error($con));
        }
        else 
        {
            echo "<script>alert('Data berhasil ditambah.');window.location='about_product.php';</script>";
        }
}
    