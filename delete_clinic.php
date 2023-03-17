<?php
    include 'connection.php';

    $id = $_GET['id'];
   
    $sql="";
    $sql="DELETE FROM tb_clinic WHERE clinic_id = '$id'";
   
    $del = mysqli_query($conn, $sql);
    if ($del){
      header('location:services_dashboard.php');
    }
?>