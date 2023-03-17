<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ubah Data User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function konfirmasi_ubah(){
            if(confirm('Simpan Data Yang Di Ubah?'))
                return true;
            else
                return false;
        }

    </script>

</head>


<?php

$user_id = $_GET['id'];

include "connection.php";

$sql = "";
$sql = "select * from tb_user where user_id = '$user_id' limit 1";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0) 
{
    while ($rows= mysqli_fetch_assoc($result))
        {
            $user_id = $rows ['user_id'];
            $first_name = $rows ['first_name'];
            $last_name = $rows ['last_name'];
            $user_email = $rows ['user_email'];
        }

}

?>

<body>
<div class="container mt-3">
  <h2>Ubah Data User</h2>
  <form action="simpan_ubah.php" method="POST" onsubmit="return konfirmasi_ubah();">
    
    <div class="mb-3 mt-3">
      <label for="user_id">ID:</label>
      <input type="text" class="form-control" id="user_id" name="user_id" value="<?php echo $user_id;?>" readonly>
    </div>
    <div class="mb-3 mt-3">
      <label for="first_name">First Name:</label>
      <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" value="<?php echo $first_name;?>" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="last_name">Last Name:</label>
      <input type="text" class="form-control" id="last_name" placeholder="last Name" name="last_name" value="<?php echo $last_name;?>"required>
    </div>
    <div class="mb-3 mt-3">
      <label for="user_email">Email:</label>
      <input type="email" class="form-control" id="user_email" placeholder="Email" name="user_email" required value="<?php echo $user_email;?>">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="admin_dashboard.php"><button type="button" class="btn btn-danger">Cancel</button></a>
  </form>
</div>

</body>
</html>