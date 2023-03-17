<?php 

	include "connection.php";  
	
	if (isset($_POST))
	{
    	$id = $_POST['id'];
		$title = $_POST['title'];
		$desc = $_POST['desc'];
	
		$sSQL="UPDATE 
    	`tb_titledesc` SET 
    	`title`='$title',
    	`service_desc`='$desc' WHERE 
    	`id`='$id'";
	  
		$ok = mysqli_query($conn,$sSQL);
        if ($ok)
        {
            echo ('Update berhasil');
        }
	}
		  
?>