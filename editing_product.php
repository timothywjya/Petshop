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
        
        $query  = "UPDATE product SET nama = '$nama', product = '$nama_gambar_baru'";
        $query .= "WHERE id = '$id'";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
                 " - ".mysqli_error($conn));
        } else 
        {
          echo "<script>alert('Data berhasil diubah.');window.location='about_product.php';</script>";
        }
    }
    else
    {
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='add_product.php';</script>";
    }
}
else
{
    $query  = "UPDATE product SET nama = '$nama'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result)
    {
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
             " - ".mysqli_error($conn));
    } 
    else 
    {
      echo "<script>alert('Data berhasil diubah.');window.location='about_product.php';</script>";
    }
}