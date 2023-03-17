<!DOCTYPE html>
<html>
<head>
<title>Cat List</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

<?php
    
   
      require_once "connection.php";
      
   ?> 

<div class="container">
<form action="save_new_cat.php" method="post" enctype="multipart/form-data">
  <div class="mb-3 mt-3">
    <label for="title" class="form-label">Title:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" name="email">
  </div>
  <div class="mb-3 mt-3">
    <label for="harga" class="form-label">Harga:</label>
    <input type="text" class="form-control" id="harga" name="harga" placeholder="Enter Price" name="email">
  </div>
  
  <div class="form-check mb-3">
    <label for="file_image" class="form-label">Upload File Image</label><br>
	<input type="file" name="fileToUpload" id="fileToUpload">
	
  </div>
 
  <div class="form-check mb-3">
    <label for="file_video" class="form-label">Upload File Video</label><br>
	<input type="file" name="fileToUploadVideo" id="fileToUploadVideo">
	
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="cat_list.php"><button type="button" class="btn  btn-danger">Cancel</button></a>
</form> 
</div>

</body>
</html>
