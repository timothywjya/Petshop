<!DOCTYPE html>
<html>
<head>
<title>Product List</title>

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
    
   
      require_once "connection.php";
      
 ?> 
 
<div class="container mt-3">
  <h2>Dog List</h2>
  <a href="new_dog_list.php"><button type="button" class="btn btn-info"> New Dog List </button>  </a>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Harga</th>
		<th>File Image</th>		
		<th>Status</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
	<tbody>
	
	 <?php
	    $sSQL="";
	    $sSQL=" select * from tb_dog order by id ";
		$result = mysqli_query($conn,$sSQL);
		if (mysqli_num_rows($result)>0)
		{
		    while($row= mysqli_fetch_assoc($result))
			{
		           $id = $row['id'];
				   $harga= $row['harga'];
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
					<td>Rp.<?php echo $harga;?></td>
					<td><?php echo $file_image;?></td>					
					<td><?php echo $status;?></td>
					<td><a href="edit_dog_list.php?id=<?php echo $id;?>" style="text-decoration:none">Edit</a></td>
					<td><a href="delete_dog.php?id=<?php echo $id;?>" style="text-decoration:none" onclick="return konfirmasi_hapus();">Delete</td>
		
      		</tr>	   
		<?php    
			}
			mysqli_free_result($result);
		}
	 
	 ?>
	
	
     
   </tbody>
  </table> 	  




</body>
</html>
