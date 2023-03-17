<?php
    include "connection.php";
   ?> 
   
<?php
   
  
   include "fungsi.php";
   
   $title= $_POST['title'];
   $description= $_POST['description'];
     	  
   if ($_FILES["fileToUploadVideo"]["tmp_name"]!="")
      $file_video = $_FILES["fileToUploadVideo"]["name"];
   else 
      $file_video="";	  
     
	 
   $sSQL="";
   
   $sSQL= "INSERT INTO tb_video (title,description,file_video)
VALUE ('$title' , '$description' , '$file_video');";

  $ok = mysqli_query($conn,$sSQL);
  if ($ok)
  {
      // check if not empty file upload image 

	   if (!empty($file_video))
	   {
	       $Target_Dir = "video/";
		   $TypeUpload = "V";
		   $FileUpload = "fileToUploadVideo";
	       UploadFilesFromForm($Target_Dir, $TypeUpload, $FileUpload);
	   
	   
	   }
  
     header('location:home_dashboard.php');
  
  
  
  }
	 
   




?>
