<?php
    include 'connection.php';

    if(isset($_POST)){
        $id = $_POST["id"];
        $title = $_POST["title"];

        $file_image = $_FILES["fileToUpload"]["name"];
        $temp_file = $_FILES["fileToUpload"]["tmp_name"];
        $folder = "images/".$file_image; 
        
        $desc = $_POST["desc"];
        $detail = $_POST["detail"];

        $sSQL="UPDATE 
       `tb_grooming` SET 
       `title`='$title',
       `image`='$file_image',
       `desc`='$desc', 
       `detail`='$detail' WHERE 
       `grooming_id`='$id'";

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
