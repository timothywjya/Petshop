<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Service</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=s, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="services_dashboard.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body>
        <h2>ADD DATA HOTEL IMAGE</h2>
        <form action="applyadd_hotelimg.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="mt-3 mb-3">
                    <label>Upload File Image</label><br>
                    <input type="file" name="fileToUpload" id="fileToUpload">    
                </div>
                <div class="mt-5 mb-3">
                    <button type="submit" name='btnsubmit' class="btn btn-primary" id="btn1">Add</button>&emsp;
                    <a href="services_dashboard.php"><button type="button" class="btn btn-danger" id="btn2">Cancel</button></a>
                </div>
            </div> 
        </form>
    </body> 
</html> 