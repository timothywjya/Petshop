<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Service</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=s, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="CSS/services_dashboard.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container" style="padding-top:50px">
            <h2>CRUD TITLE</h2>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $sql = "SELECT * FROM `tb_titledesc` WHERE 1";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0)  
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                $id = $row['id'];
                                $title = $row['title'];
                                $desc = $row['service_desc'];
                                print("<tr>");
                                printf('<td>%s</td>',$title);
                                printf('<td>%s</td>',$desc);                  
                                printf('<td><a href="update_title.php?id=%s"><b>UPDATE</b></a></td>',$id);
                                print("</tr>");
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
        
        <div class="container mt-5">
            <h2>CRUD GROOMING</h2>
            <a href="add_grooming.php"><button type="button" class="btn btn-primary" id="btn1" id="btn1">ADD</button></a>
            <div class="container">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Detail & Price</th>
                        <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $sql = "SELECT * FROM `tb_grooming` WHERE 1";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0)  
                            {
                                while($row = $result->fetch_assoc()) 
                                {
                                    $id = $row['grooming_id'];
                                    $title = $row['title'];
                                    $img = $row['image'];
                                    $desc = $row['desc'];
                                    $detail = $row['detail'];
                                    print("<tr>");
                                    printf('<td>%s</td>',$id);
                                    printf('<td>%s</td>',$title);
                                    printf('<td>%s</td>',$img);
                                    printf('<td>%s</td>',$desc);                                    
                                    printf('<td>%s</td>',$detail);                  
                                    printf('<td><a href="update_grooming.php?id=%s"><b>UPDATE</b></a> | <a href="delete_grooming.php?id=%s"><b>DELETE</b></a></td>',$id,$id);
                                    print("</tr>");
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container mt-5">
            <h2>CRUD CLINIC</h2>
            <a href="add_clinic.php"><button type="button" class="btn btn-primary" id="btn1">ADD</button></a>
            <div class="container">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Detail & Price</th>
                        <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $sql = "SELECT * FROM `tb_clinic` WHERE 1";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0)  
                            {
                                while($row = $result->fetch_assoc()) 
                                {
                                    $id = $row['clinic_id'];
                                    $title = $row['title'];
                                    $img = $row['image'];
                                    $desc = $row['desc'];
                                    $detail = $row['detail'];
                                    print("<tr>");
                                    printf('<td>%s</td>',$id);
                                    printf('<td>%s</td>',$title);
                                    printf('<td>%s</td>',$img);
                                    printf('<td>%s</td>',$desc);                                    
                                    printf('<td>%s</td>',$detail);                  
                                    printf('<td><a href="update_clinic.php?id=%s"><b>UPDATE</b></a> | <a href="delete_clinic.php?id=%s"><b>DELETE</b></a></td>',$id,$id);
                                    print("</tr>");
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container" style="padding-top:50px">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th>Clinic Description</th>
                    <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $sql = "SELECT * FROM `tb_titledesc` WHERE 1";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0)  
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                $id = $row['id'];
                                $desc = $row['clinic_desc'];
                                print("<tr>");
                                printf('<td>%s</td>',$desc);                  
                                printf('<td><a href="update_clinicdesc.php?id=%s"><b>UPDATE</b></a></td>',$id);
                                print("</tr>");
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="container mt-5">
            <h2>CRUD TRAINING</h2>
            <a href="add_training.php"><button type="button" class="btn btn-primary" id="btn1">ADD</button></a>
            <div class="container">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $sql = "SELECT * FROM `tb_training` WHERE 1";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0)  
                            {
                                while($row = $result->fetch_assoc()) 
                                {
                                    $id = $row['training_id'];
                                    $title = $row['title'];
                                    $img = $row['image'];
                                    $desc = $row['desc'];
                                    $price = $row['price'];
                                    print("<tr>");
                                    printf('<td>%s</td>',$id);
                                    printf('<td>%s</td>',$title);
                                    printf('<td>%s</td>',$img);
                                    printf('<td>%s</td>',$desc);                                    
                                    printf('<td>%s</td>',$price);                  
                                    printf('<td><a href="update_training.php?id=%s"><b>UPDATE</b></a> | <a href="delete_training.php?id=%s"><b>DELETE</b></a></td>',$id,$id);
                                    print("</tr>");
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container mt-5">
            <h2>CRUD HOTEL IMAGE</h2>
            <a href="add_hotelimg.php"><button type="button" class="btn btn-primary" id="btn1">ADD</button></a>
            <div class="container">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $sql = "SELECT * FROM `tb_hotelimg` WHERE 1";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0)  
                            {
                                while($row = $result->fetch_assoc()) 
                                {
                                    $id = $row['img_id'];
                                    $img = $row['image'];
                                    print("<tr>");
                                    printf('<td>%s</td>',$id);
                                    printf('<td>%s</td>',$img);                 
                                    printf('<td><a href="update_hotelimg.php?id=%s"><b>UPDATE</b></a> | <a href="delete_hotelimg.php?id=%s"><b>DELETE</b></a></td>',$id,$id);
                                    print("</tr>");
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="container" style="padding-top:50px">
            <h2>CRUD HOTEL DESCRIPTION</h2>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th>Hotel Description</th>
                    <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $sql = "SELECT * FROM `tb_titledesc` WHERE 1";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0)  
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                $id = $row['id'];
                                $desc = $row['hotel_desc'];
                                print("<tr>");
                                printf('<td>%s</td>',$desc);                  
                                printf('<td><a href="update_hoteldesc.php?id=%s"><b>UPDATE</b></a></td>',$id);
                                print("</tr>");
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="container mt-5">
            <h2>CRUD HOTEL PRICE</h2>
            <a href="add_hotelprice.php"><button type="button" class="btn btn-primary" id="btn1">ADD</button></a>
            <div class="container">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th>ID</th>
                        <th>Pet Type</th>
                        <th>Price</th>
                        <th>Time Type</th>
                        <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $sql = "SELECT * FROM `tb_hotelprice` WHERE 1";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0)  
                            {
                                while($row = $result->fetch_assoc()) 
                                {
                                    $id = $row['pet_id'];
                                    $pet_type = $row['pet_type'];
                                    $price = $row['price'];
                                    $time_type = $row['time_type'];
                                    print("<tr>");
                                    printf('<td>%s</td>',$id);
                                    printf('<td>%s</td>',$pet_type);  
                                    printf('<td>%s</td>',$price);  
                                    printf('<td>%s</td>',$time_type);                 
                                    printf('<td><a href="update_hotelprice.php?id=%s"><b>UPDATE</b></a> | <a href="delete_hotelprice.php?id=%s"><b>DELETE</b></a></td>',$id,$id);
                                    print("</tr>");
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>