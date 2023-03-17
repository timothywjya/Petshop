<?php
    include 'connection.php';
    if(isset($_POST)){
        $title = $_POST["title"];

        $file_image = $_FILES["fileToUpload"]["name"];
        $temp_file = $_FILES["fileToUpload"]["tmp_name"];
        $folder = "images/".$file_image; 

        $desc = $_POST["desc"];
        $detail = $_POST["detail"];
        $sql = "INSERT INTO `tb_grooming`(`title`, `image`, `desc`, `detail`) VALUES ('$title','$file_image','$desc','$detail')";
        
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
