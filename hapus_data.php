<?php

$user_id = $_GET['id'];

include "connection.php";

$sql = "";
$sql = "delete from tb_user where user_id = '$user_id'";

$result = mysqli_query($conn, $sql);

$ok = mysqli_query($conn,$sql);
    if($ok)
        header("location:index.php");

?>