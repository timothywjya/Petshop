<?php
include 'connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$service = $_FILES['service']['name'];

if($service != "")
{
    $ekstensi_diperbolehkan = array('png','jpg');
    $x = explode('.' ,$service);
    $ekstensi = strtolower(end($x));

    $file_tmp = $_FILES['service']['tmp_name'];
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$service;

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  
    {
        move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
        
        $query  = "UPDATE service SET nama = '$nama', service = '$nama_gambar_baru'";
        $query .= "WHERE id = '$id'";
        $result = mysqli_query($con, $query);

        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($con).
                 " - ".mysqli_error($con));
        } else 
        {
          echo "<script>alert('Data berhasil diubah.');window.location='about_service.php';</script>";
        }
    }
    else
    {
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='add_service.php';</script>";
    }
}
else
{
    $query  = "UPDATE service SET nama = '$nama'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result)
    {
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
             " - ".mysqli_error($conn));
    } 
    else 
    {
      echo "<script>alert('Data berhasil diubah.');window.location='about_service.php';</script>";
    }
}