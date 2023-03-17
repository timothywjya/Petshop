<?php
include 'connection.php';

$id = $_POST['id'];
$sejarah = $_POST['sejarah'];


mysqli_query($con,"update sejarah set sejarah ='$sejarah' where id='$id'");
header("location:about_sejarah.php");
?>