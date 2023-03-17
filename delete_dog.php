<?php
     session_start();
     if (empty($_SESSION['isLoggedin']))
           header("location: logout.php");
      
   
      require_once "connection.php";
      
   ?> 

<?php
   
   
   
   
   $id = $_GET['id'];
   
   
   $sSQL="";
	    $sSQL=" select * from tb_dog where id='$id' limit 1";
		$result= mysqli_query($conn,$sSQL);
		if (mysqli_num_rows($result)>0)
		{
		    while($row= mysqli_fetch_assoc($result))
			{
		          
				   $file_image = $row['file_image'];
				   $file_video = $row['file_video'];
			}
		}		   
  
     
	 
   $sSQL="";
   
   $sSQL= " delete from tb_dog ";
   $sSQL.= " where id = '$id'";      
	   	   

  $ok = mysqli_query($conn,$sSQL) or die($sSQL);
  if ($ok)
  {
      // check if not empty file upload image 
	  
       if (!empty($file_image))
	   {
	       $Target_Dir = "images/";
		   
		   unlink($Target_Dir.$file_image);
		   
		   
		  
	   
	   
	   }
	   
	   if (!empty($file_video))
	   {
	       $Target_Dir = "video/";
		   
		   unlink($Target_Dir.$file_video);
		  
	   
	   
	   }
  
     header('location:dog_list.php');
  
  
  
  }
	 
   




?>
