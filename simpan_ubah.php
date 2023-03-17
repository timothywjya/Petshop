<?php

$user_id = $_POST['user_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_email = $_POST['user_email'];


include "connection.php";

$sql = "";
$sql = "update tb_user set first_name = '$first_name', last_name = '$last_name', user_email = '$user_email' where user_id ='$user_id'";

$ok = mysqli_query($conn,$sql);
    if($ok)
        header("location:index.php");

?>