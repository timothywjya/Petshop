<?php
  include('connection.php');
 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Top Service</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: #766dc1;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background:#ededed;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: center;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: #766dc1;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border-radius: 8px;
    }
    </style>
  </head>
  <body>
    <center><h1>List Top Service</h1><center>
    <center><a href="add_service.php">Add Service</a><center>
    <br>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Service</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM service ORDER BY id";
      $result = mysqli_query($conn, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($conn).
           " - ".mysqli_error($conn));
      }
      $no = 1; 
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['service']; ?>" style="width: 120px;"></td>
          <td>
              <a href="edit_service.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a href="delete_service.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; 
      }
      ?>
    </tbody>
    </table>
    <a href="about_dashboard.php">Back</a> <br><br>
  </body>
</html>