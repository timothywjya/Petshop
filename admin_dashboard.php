<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script> 

        function konfirmasi_hapus(){
            if(confirm('Yakin Hapus Data?'))
                return true;
            else
                return false;
        }
    
    </script>
</head>
<body>

<?php
include "connection.php"
?>

<div class="container mt-3">
  <h2>User Data</h2>
  <a href="tambah_data.php"><button type="button" class="btn btn-info"> Tambah Data </button></a>
              
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    
    <?php
    
    $sql = "";
    $sql = "SELECT * FROM tb_user ORDER BY user_id ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0) 
    {

        while ($rows= mysqli_fetch_assoc($result))
        {
            $user_id = $rows ['user_id'];
            $first_name = $rows ['first_name'];
            $last_name = $rows ['last_name'];
            $user_email = $rows ['user_email'];

        ?>
        <tr>
        <td><?php echo $user_id; ?></td>
        <td><?php echo $first_name; ?></td>
        <td><?php echo $last_name; ?></td>
        <td><?php echo $user_email; ?></td>
        <td><a href="ubah_data.php?id=<?php echo $user_id;?>">Update</a></td>
        <td><a onclick="return konfirmasi_hapus();" href="hapus_data.php?id=<?php echo $user_id;?>">Delete</a></td>
        </tr>

        <?php
        }
    }

    ?>

    

    



        </tbody>
      
      
    
  </table>
</div>

</body>
</html>
