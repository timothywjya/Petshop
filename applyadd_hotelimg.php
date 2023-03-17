<?php
    include 'connection.php';
    if(isset($_POST)){

        $file_image = $_FILES["fileToUpload"]["name"];
        $temp_file = $_FILES["fileToUpload"]["tmp_name"];
        $folder = "images/".$file_image; 

        $sql = "INSERT INTO `tb_hotelimg`(`image`) VALUES ('$file_image')";
        
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
