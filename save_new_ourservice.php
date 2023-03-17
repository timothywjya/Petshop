<?php
    include "connection.php";
   ?> 
   
<?php
   
  
   include "fungsi.php";
   
   $title= $_POST['title'];
   $description= $_POST['description'];
   
   if ($_FILES["fileToUpload"]["tmp_name"]!="")
      $file_image = $_FILES["fileToUpload"]["name"];
   else 
      $file_image="";
	  

   $sSQL="";
   
   $sSQL= "INSERT INTO tb_our_service (title,description,file_image)
VALUE ('$title' , '$description' , '$file_image');";

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

  
     header('location:home_dashboard.php');
  
  
  
  }
	 
   




?>
