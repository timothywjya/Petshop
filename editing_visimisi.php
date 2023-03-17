<?php
include 'connection.php';

$id = $_POST['id'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];


mysqli_query($conn,"update visimisi set visi='$visi', misi='$misi' where id='$id'");
header("location:about_visimisi.php");
?>