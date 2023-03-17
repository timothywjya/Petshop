<?php
    include "connection.php";
   ?> 

<?php
   
  
   include "fungsi.php";
   
   $id = $_POST['id'];
   $title= $_POST['title'];
   $description= $_POST['description'];
   $flag_active = $_POST['status'];
   $old_file_video = $_POST['old_file_video'];
   
	  	  
   if ($_FILES["fileToUploadVideo"]["tmp_name"]!="")
      $file_video = $_FILES["fileToUploadVideo"]["name"];
   else 
      $file_video="";	  
     
	 
   $sSQL="";
   
   $sSQL= "update tb_video set title='$title', description='$description',
           flag_active='$flag_active'";
		   
	   
	if (!empty($file_video))
	   $sSQL.=",file_video ='$file_video'";
	
	$sSQL.= " where id = '$id'";      
	   	   

  $ok = mysqli_query($conn,$sSQL) or die($sSQL);
  if ($ok)
  {
      // check if not empty file upload image 
	  
	   if (!empty($file_video))
	   {
	       $Target_Dir = "video/";
		   
		   unlink($Target_Dir.$old_file_video);
		   
		   $TypeUpload = "V";
		   $FileUpload = "fileToUploadVideo";
	       UploadFilesFromForm($Target_Dir, $TypeUpload, $FileUpload);
	   
	   
	   }
  
     header('location:home_dashboard.php');
  
  
  
  }
	 
   




?>
