<?php
    include 'connection.php';
    if(isset($_POST)){

        $pet_type = $_POST["pet_type"];
        $price = $_POST["price"];
        $time_type = $_POST["time_type"]; 

        $sql = "INSERT INTO `tb_hotelprice`(`pet_type`,`price`,`time_type`) VALUES ('$pet_type','$price','$time_type')";
        
        $ok = mysqli_query($conn,$sql);
        if($ok)
        {
            echo ('Add data berhasil');
            echo "<br>";
        }
    }
?>
