<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function konfirmasi_tambah(){
            if(confirm('Tambah Data?'))
                return true;
            else
                return false;
        }

    </script>



</head>
<body>

<div class="container mt-3">
  <h2>Tambah Data User</h2>
  <form action="simpan_tambah.php" method="POST" onsubmit="return konfirmasi_tambah();">
    
    <div class="mb-3 mt-3">
      <label for="first_name">First Name:</label>
      <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="last_name">Last Name:</label>
      <input type="text" class="form-control" id="last_name" placeholder="last Name" name="last_name" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="user_email">Email:</label>
      <input type="email" class="form-control" id="user_email" placeholder="Email" name="user_email" required>
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="user_password" placeholder="Password" name="user_password" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="admin_dashboard.php"><button type="button" class="btn btn-danger">Cancel</button></a>
  </form>
</div>

</body>
</html>