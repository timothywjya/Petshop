<?php
     session_start();
     if (empty($_SESSION['isLoggedin']))
           header("location: logout.php");
      
   
      require_once "connection.php";
      
   ?> 
<?php
   
  
   include "fungsi.php";
   
   $title= $_POST['title'];
   $harga= $_POST['harga'];
   
   if ($_FILES["fileToUpload"]["tmp_name"]!="")
      $file_image = $_FILES["fileToUpload"]["name"];
   else 
      $file_image="";
	  
	  	  
   if ($_FILES["fileToUploadVideo"]["tmp_name"]!="")
      $file_video = $_FILES["fileToUploadVideo"]["name"];
   else 
      $file_video="";	  
     
	 
   $sSQL="";
   
   $sSQL= "INSERT INTO tb_dog (title,harga,file_image,file_video)
VALUE ('$title' , '$harga' , '$file_image' , '$file_video');";

  $ok = mysqli_query($conn,$sSQL);
  if ($ok)
  {
      // check if not empty file upload image 
	  
       if (!empty($file_image))
	   {
	       $Target_Dir = "images/";
		   $TypeUpload = "i";
		   $FileUpload = "fileToUpload";
	       UploadFilesFromForm($Target_Dir, $TypeUpload, $FileUpload);
	   
	   
	   }
	   
	   if (!empty($file_video))
	   {
	       $Target_Dir = "video/";
		   $TypeUpload = "V";
		   $FileUpload = "fileToUploadVideo";
	       UploadFilesFromForm($Target_Dir, $TypeUpload, $FileUpload);
	   
	   
	   }
  
     header('location:dog_list.php');
  
  
  
  }
	 
   




?>
