<?php
    include 'connection.php';

    if(isset($_POST)){
        $id = $_POST["id"];

        $file_image = $_FILES["fileToUpload"]["name"];
        $temp_file = $_FILES["fileToUpload"]["tmp_name"];
        $folder = "images/".$file_image; 
        
        $sSQL="UPDATE 
       `tb_hotelimg` SET 
       `image`='$file_image' WHERE 
       `img_id`='$id'";

        $ok = mysqli_query($conn,$sSQL);
        if ($ok)
        {
            echo ('Update berhasil');
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
