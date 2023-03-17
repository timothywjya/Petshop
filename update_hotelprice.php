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
                $sSQL="SELECT * FROM `tb_hotelprice` WHERE id ='$id' limit 1";
                $result = mysqli_query($conn,$sSQL);
                if ($result)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row['id'];
                        $pet_type = $row['pet_type'];
                        $price = $row['price'];
                        $time_type = $row['time_type'];
                    }	   
                }		      
            }
	    ?>	 
        <h2>UPDATE DATA HOTEL PRICE</h2>
        <form action="applyupdate_hotelprice.php" method="post">
            <div class="container">
                <div class="mb-3 mt-3" style="display:none">
                    <label>Title Id</label>
                    <input type="text" class="form-control" readonly name="id" value="<?php echo $id;?>">
                </div>
                <div class="mt-3 mb-3">
                    <label>Pet Type</label>
                    <input type="text" class="form-control" placeholder="Enter pet type" name='pet_type'>
                </div>
                <div class="mt-3 mb-3">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Enter price" name='price'>
                </div>
                <div class="mt-3 mb-3">
                    <label>Time type</label>
                    <input type="text" class="form-control" placeholder="Enter time type" name='time_type'>
                </div>
                <div class="mt-5 mb-3">
                    <button type="submit" name='btnsubmit' class="btn btn-primary" id="btn1">Update</button>&emsp;
                    <a href="services_dashboard.php"><button type="button" class="btn btn-danger" id="btn2">Cancel</button></a>
                </div>
            </div> 
        </form>
    </body> 
</html> 