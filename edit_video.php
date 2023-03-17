<!DOCTYPE html>
<html>
<head>
<title>Edit Video</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
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
		           $id = $row['id'];
				   $description= $row['description'];
				   $file_video = $row['file_video'];
				   $flag_active = $row['flag_active'];
				   $title = $row['title'];
		    }
			mysqli_free_result($result);
	     }				   
	     

?>

<div class="container">
<h1 class="text-center"> Edit Video </h1>
<form action="save_edit_video.php" method="post" enctype="multipart/form-data">
  <div class="mb-3 mt-3">
    <label for="title" class="form-label">ID:</label>
    <input type="text" class="form-control" id="id" name="id" value="<?php echo $id;?>" readonly>
  </div>
  
  <div class="mb-3 mt-3">
    <label for="title" class="form-label">Title:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="<?php echo $title;?>">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea id="description" name="description" rows="3" cols="120" placeholder="Enter description">
	<?php echo $description;?>
	
	</textarea>
  </div>
  <div class="form-check mb-3">
  
  <label for="old_file_video" class="form-label">Old File Video</label><br>
    <input type="text" name="old_file_video" value="<?php echo $file_video;?>"readonly> <br>
	
    <label for="fileToUploadVideo" class="form-label">Change File Video</label><br>
	<input type="file" name="fileToUploadVideo" id="fileToUploadVideo">
	
  </div>
  
   <div class="form-check mb-3">
       <label for="status" class="form-label">Status</label><br>
	   
	    <?php 
	    if ($flag_active=='1')
		{
	  
	  ?>
	  
	  <input type="radio" id="status" name="status" value="1" checked="checked"> Active
  	  <input type="radio" id="status" name="status" value="0"> Not Active 
       
	   <?php
	      }
		  else 
		  {
		?>  
		      <input type="radio" id="status" name="status" value="1"> Active
  	  <input type="radio" id="status" name="status" value="0" checked="checked"> Not Active 
	  
	  <?php	  
		  }
	   
	   ?>
   
   </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="home_dashboard.php"><button type="button" class="btn  btn-danger">Cancel</button></a>
</form> 
</div>

</body>
</html>
