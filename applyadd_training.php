<?php
    include 'connection.php';
    if(isset($_POST)){
        $title = $_POST["title"];

        $file_image = $_FILES["fileToUpload"]["name"];
        $temp_file = $_FILES["fileToUpload"]["tmp_name"];
        $folder = "images/".$file_image; 

        $desc = $_POST["desc"];
        $price = $_POST["price"];
        $sql = "INSERT INTO `tb_training`(`title`, `image`, `desc`, `price`) VALUES ('$title','$file_image','$desc','$price')";
        
        $ok = mysqli_query($conn,$sql);
        if($ok)
        {
            echo ('Add data berhasil');
            echo "<br>";

            if (move_uploaded_file($temp_file, $folder)) 
            {
                $msg = "Image uploaded successfully";
            }
            else{
                $msg = "Failed to upload image";
            }
            echo ($msg);
        }
    }
?>
