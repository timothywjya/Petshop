<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_email = $_POST['user_email'];
$user_password = md5(trim($_POST['user_password']));

include "connection.php";

$sql = "INSERT INTO `tb_user`(`first_name`, `last_name`, `user_email`, `user_password`)
        VALUES ('$first_name','$last_name','$user_email', '$user_password');";

$ok = mysqli_query($conn,$sql);
    if($ok)
        header("location:index.php");


?>