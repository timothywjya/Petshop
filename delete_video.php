<?php
     include "connection.php";
   ?> 

<?php
   
   
   
   
   $id = $_GET['id'];
   
   
   $sSQL="";
	    $sSQL=" select * from tb_video where id='$id' limit 1";
		$result= mysqli_query($conn,$sSQL);
		if (mysqli_num_rows($result)>0)
		{
		    while($row= mysqli_fetch_assoc($result))
			{
				$file_video = $row['file_video'];
			}
		}		   
  
     
	 
   $sSQL="";
   
   $sSQL= " delete from tb_video ";
   $sSQL.= " where id = '$id'";      
	   	   

  $ok = mysqli_query($conn,$sSQL) or die($sSQL);
  if ($ok)
  {
      // check if not empty file upload image 
	   
	   if (!empty($file_video))
	   {
	       $Target_Dir = "video/";
		   
		   unlink($Target_Dir.$file_video);
		  
	   
	   
	   }
  
     header('location:home_dashboard.php');
  
  
  
  }
	 
   




?>
