<!DOCTYPE html>
<html>
<head>
<title>Our Service</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

<?php
     include "connection.php" 
   ?> 

<div class="container">
<form action="save_new_ourservice.php" method="post" enctype="multipart/form-data">
  <div class="mb-3 mt-3">
    <label for="title" class="form-label">Title:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" name="email">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label><br>
    <textarea id="description" name="description" rows="5" cols="120" placeholder="Enter description">
	</textarea>
  </div>
  <div class="form-check mb-3">
    <label for="file_image" class="form-label">Upload File Image</label><br>
	<input type="file" name="fileToUpload" id="fileToUpload">
	
  </div>  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="home_dashboard.php"><button type="button" class="btn  btn-danger">Cancel</button></a>
</form> 
</div>

</body>
</html>
