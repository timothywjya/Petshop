<?php
     session_start();
     if (empty($_SESSION['isLoggedin']))
           header("location: logout.php");
      
   
      require_once "connection.php";
      
   ?> 

<?php
   
  
   include "fungsi.php";
   
   $id = $_POST['id'];
   $title= $_POST['title'];
   $harga= $_POST['harga'];
   $flag_active = $_POST['status'];
   $old_file_image = $_POST['old_file_image'];
   $old_file_video = $_POST['old_file_video'];
   
   
   if ($_FILES["fileToUpload"]["tmp_name"]!="")
      $file_image = $_FILES["fileToUpload"]["name"];
   else 
      $file_image="";
	  
	  	  
   if ($_FILES["fileToUploadVideo"]["tmp_name"]!="")
      $file_video = $_FILES["fileToUploadVideo"]["name"];
   else 
      $file_video="";	  
     
	 
   $sSQL="";
   
   $sSQL= "update tb_product set title='$title', harga='$harga',
           flag_active='$flag_active'";
		   
	if (!empty($file_image))
	   $sSQL.=",file_image ='$file_image'";
	   
	if (!empty($file_video))
	   $sSQL.=",file_video ='$file_video'";
	
	$sSQL.= " where id = '$id'";      
	   	   

  $ok = mysqli_query($conn,$sSQL) or die($sSQL);
  if ($ok)
  {
      // check if not empty file upload image 
	  
       if (!empty($file_image))
	   {
	       $Target_Dir = "images/";
		   
		   unlink($Target_Dir.$old_file_image);
		   
		   
		   $TypeUpload = "i";
		   $FileUpload = "fileToUpload";
	       UploadFilesFromForm($Target_Dir, $TypeUpload, $FileUpload);
	   
	   
	   }
	   
	   if (!empty($file_video))
	   {
	       $Target_Dir = "video/";
		   
		   unlink($Target_Dir.$old_file_video);
		   
		   $TypeUpload = "V";
		   $FileUpload = "fileToUploadVideo";
	       UploadFilesFromForm($Target_Dir, $TypeUpload, $FileUpload);
	   
	   
	   }
  
     header('location:product_list.php');
  
  
  
  }
	 
   




?>
