<!DOCTYPE html>
<html>
<head>
<title>Home Dashboard</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    function konfirmasi_hapus()
	{
	   if (confirm('Yakin hapus data ?'))
	     return true;
	   else 
	     return false;	 
	
	
	}
  
  
  </script>

</head>

<body>

<?php
include "connection.php";
?>

<div align="center">
	<h1>CRUD HOME DASHBOARD</h1> <br>
</div>



<div class="container mt-3">
  <h2>Video List</h2>
  <a href="new_video.php"><button type="button" class="btn btn-info"> New Video </button>  </a>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
		<th>File Video</th>
		<th>Status</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
	<tbody>
	
	 <?php
	    $sSQL="";
	    $sSQL=" select * from tb_video order by id ";
		$result= mysqli_query($conn,$sSQL);
		if (mysqli_num_rows($result)>0)
		{
		    while($row= mysqli_fetch_assoc($result))
			{
		           $id = $row['id'];
				   $description= $row['description'];
				   $file_video = $row['file_video'];
				   $flag_active = $row['flag_active'];
				   $title = $row['title'];
				   
				   if ($flag_active=='1')
				       $status="Active";
				   else 
				       $status= " Not Active";	
		?>			      
			
			 <tr>
					<td><?php echo $id;?></td>
					<td><?php echo $title;?></td>
					<td><?php echo $file_video;?></td>
					<td><?php echo $status;?></td>
					<td><a href="edit_video.php?id=<?php echo $id;?>" style="text-decoration:none">Edit</a></td>
					<td><a href="delete_video.php?id=<?php echo $id;?>" style="text-decoration:none" onclick="return konfirmasi_hapus();">Delete</td>
		
      		</tr>	   
		<?php    
			}
			mysqli_free_result($result);
		}
	 
	 ?>
	
	
     
   </tbody>
  </table> 	  



  <br>
  <br>



  <div class="container mt-3">
  <h2>Our Service List</h2>
  <a href="new_ourservice.php"><button type="button" class="btn btn-info"> New Image </button>  </a>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>File Image</th>
		<th>Status</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
	<tbody>
	
	 <?php
	    $sSQL="";
	    $sSQL=" select * from tb_our_service order by id ";
		$result= mysqli_query($conn,$sSQL);
		if (mysqli_num_rows($result)>0)
		{
		    while($row= mysqli_fetch_assoc($result))
			{
		           $id = $row['id'];
				   $description= $row['description'];
				   $file_image = $row['file_image'];
				   $flag_active = $row['flag_active'];
				   $title = $row['title'];
				   
				   if ($flag_active=='1')
				       $status="Active";
				   else 
				       $status= " Not Active";	
		?>			      
			
			 <tr>
					<td><?php echo $id;?></td>
					<td><?php echo $title;?></td>
					<td><?php echo $file_image;?></td>
					<td><?php echo $status;?></td>
					<td><a href="edit_ourservice.php?id=<?php echo $id;?>" style="text-decoration:none">Edit</a></td>
					<td><a href="delete_ourservice.php?id=<?php echo $id;?>" style="text-decoration:none" onclick="return konfirmasi_hapus();">Delete</td>
		
      		</tr>	   
		<?php    
			}
			mysqli_free_result($result);
		}
	 
	 ?>
	
	
     
   </tbody>
  </table> 	  



  <br>
  <br>


  <div class="container mt-3">
  <h2>Top Product</h2>
  <a href="new_topproduct.php"><button type="button" class="btn btn-info"> New Image </button>  </a>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>File Image</th>
		<th>Status</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
	<tbody>
	
	 <?php
	    $sSQL="";
	    $sSQL=" select * from tb_top_product order by id ";
		$result= mysqli_query($conn,$sSQL);
		if (mysqli_num_rows($result)>0)
		{
		    while($row= mysqli_fetch_assoc($result))
			{
		           $id = $row['id'];
				   $description= $row['description'];
				   $file_image = $row['file_image'];
				   $flag_active = $row['flag_active'];
				   $title = $row['title'];
				   
				   if ($flag_active=='1')
				       $status="Active";
				   else 
				       $status= " Not Active";	
		?>			      
			
			 <tr>
					<td><?php echo $id;?></td>
					<td><?php echo $title;?></td>
					<td><?php echo $file_image;?></td>
					<td><?php echo $status;?></td>
					<td><a href="edit_topproduct.php?id=<?php echo $id;?>" style="text-decoration:none">Edit</a></td>
					<td><a href="delete_topproduct.php?id=<?php echo $id;?>" style="text-decoration:none" onclick="return konfirmasi_hapus();">Delete</td>
		
      		</tr>	   
		<?php    
			}
			mysqli_free_result($result);
		}
	 
	 ?>
	
	
     
   </tbody>
  </table> 	  


  <br>
  <br>




</body>
</html>
