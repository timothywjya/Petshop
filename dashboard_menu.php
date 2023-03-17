<?php
    session_start();
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Service</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=s, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            h1 {
                text-align:center;
                font-family:Verdana, Geneva, Tahoma, sans-serif;
                padding:50px;
            }
        </style>
    </head>
    <body>

        <h1 class="mt-4" style="text-align:center">WELCOME TO DASHBOARD FELICE PETSHOP,<br><br>
        <?php
           
           if(isset($_SESSION['email']))
           {
                $email = $_SESSION['email'];
                $query = "SELECT * FROM tb_user where user_email = '$email' limit 1";
       
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result))
                {
                    $f_name = $row['first_name'];
                    $l_name = $row['last_name'];
                    echo $f_name;
                }
           }
        ?>
        <?php echo $l_name?> !</h1>

    </body> 
</html> 