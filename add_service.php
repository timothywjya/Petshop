<?php
    include('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>ADD SERVICE</title>
    <style>
        * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: #766dc1;
      }
    button {
          background-color: #766dc1;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: 400px;
      padding: 25px;
      margin-top : 100px;
      margin-left: auto;
      margin-right: auto;
      background: -webkit-linear-gradient(right, #e2b2ff, #f9d1d1);
    }
        </style>
</head>
<body>
<form method="POST" action="adding_service.php" enctype="multipart/form-data" >
<section class="base">
<center> <h1>ADD SERVICE</h1></center>
        <div>
          <label>ID</label>
          <input type="text" name="id" autofocus="" required="" />
        </div><br>
        <div>
          <label>Nama Service</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div><br>
        <div>
          <label>Gambar Service</label>
         <input type="file" name="service" required="" />
        </div><br><br>
        <div>
         <button type="submit">Save Service</button>
        </div>
</section>
</form>
</body>
</html>
