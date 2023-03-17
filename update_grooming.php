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
        <?php
            $id = $_GET['id'];
            if ($id)
            {
                $sSQL="SELECT * FROM `tb_grooming` WHERE grooming_id ='$id' limit 1";
                $result = mysqli_query($conn,$sSQL);
                if ($result)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {                   
                        $id = $row['grooming_id'];
                        $title = $row['title'];
                        $img = $row['image'];	
                        $desc = $row['desc'];	
                        $detail = $row['detail'];
                    }
                }		      
            }
	    ?>	 
        <h2>UPDATE DATA GROOMING</h2>
        <form action="applyupdate_grooming.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="mb-3 mt-3" style="display:none">
                    <label>Title Id</label>
                    <input type="text" class="form-control" readonly name="id" value="<?php echo $id;?>">
                </div>
                <div class="mt-3 mb-3">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Enter title" name='title'>
                </div>
                <div class="mt-3 mb-3">
                    <label>Upload File Image</label><br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div class="mt-3 mb-3">               
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="Enter description" name='desc'>
                </div>
                <div class="mt-3 mb-3">               
                    <label>Detail</label>
                    <input type="text" class="form-control" placeholder="Enter detail" name='detail'>
                </div>
                <div class="mt-5 mb-3">
                    <button type="submit" name='btnsubmit' class="btn btn-primary" id="btn1">Update</button>&emsp;
                    <a href="services_dashboard.php"><button type="button" class="btn btn-danger" id="btn2">Cancel</button></a>
                </div>
            </div> 
        </form>
</html> 