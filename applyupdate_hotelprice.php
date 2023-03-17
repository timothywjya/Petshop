<?php
    include 'connection.php';

    if(isset($_POST)){
        $id = $_POST["id"];
        $pet_type = $_POST["pet_type"];
        $price = $_POST["price"];
        $time_type = $_POST["time_type"];

        $sSQL="UPDATE 
       `tb_hotelprice` SET 
       `pet_type`='$pet_type',
       `price`='$price',
       `time_type`='$time_type' WHERE 
       `pet_id`='$id'";

        $ok = mysqli_query($conn,$sSQL);
        if ($ok)
        {
            echo ('Update berhasil');
        }
    }
?>
