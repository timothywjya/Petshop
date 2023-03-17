<?php
     include "connection.php";
   ?> 

<?php
   
   
   
   
   $id = $_GET['id'];
   
   
   $sSQL="";
	    $sSQL=" select * from tb_top_product where id='$id' limit 1";
		$result= mysqli_query($conn,$sSQL);
		if (mysqli_num_rows($result)>0)
		{
		    while($row= mysqli_fetch_assoc($result))
			{
                $file_image = $row['file_image'];
			}
		}		   
  
     
	 
   $sSQL="";
   
   $sSQL= " delete from tb_top_product ";
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
	   
  
     header('location:home_dashboard.php');
    
    }
	 

?>
