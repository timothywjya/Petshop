<?php
    include "connection.php";
   ?> 

<?php
   
  
   include "fungsi.php";
   
   $id = $_POST['id'];
   $title= $_POST['title'];
   $description= $_POST['description'];
   $web = $_POST['web'];
   $flag_active = $_POST['status'];
   $old_file_image = $_POST['old_file_image'];
   
   if ($_FILES["fileToUpload"]["tmp_name"]!="")
      $file_image = $_FILES["fileToUpload"]["name"];
   else 
      $file_image="";
	  
	  	  
  
   $sSQL="";
   
   $sSQL= "update tb_top_product set title='$title', description='$description',
           web = '$web', flag_active='$flag_active'";
		   
	if (!empty($file_image))
	   $sSQL.=",file_image ='$file_image'";
	   

	
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
	   
     header('location:home_dashboard.php');
  
  
  
  }
	 
   




?>
