<?php 

	include "connection.php";  
	
	if (isset($_POST))
	{
    	$id = $_POST['id'];
		$desc = $_POST['desc'];
	
		$sSQL="UPDATE 
    	`tb_titledesc` SET 
    	`hotel_desc`='$desc' WHERE 
    	`id`='$id'";
	  
		$ok = mysqli_query($conn,$sSQL);
        if ($ok)
        {
            echo ('Update berhasil');
        }
	}
		  
?>