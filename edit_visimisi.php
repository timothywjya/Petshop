<?php
    include 'connection.php';

    if (isset($_GET['id'])) 
    {
        $id = ($_GET["id"]);

        $query = "SELECT * FROM visimisi WHERE id='$id'";
        $result = mysqli_query($conn, $query);

        if(!$result)
        {
            die ("Query Error: ".mysqli_errno($conn).
               " - ".mysqli_error($conn));
        }
        $data = mysqli_fetch_assoc($result);
         if (!count($data)) 
         {
            echo "<script>alert('Data tidak ditemukan pada database');window.location='about_service.php';</script>";
         }
    } 
    else
    {
        echo "<script>alert('Masukkan data id.');window.location='about_service.php';</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>EDIT VISI & MISI</title>
    <style type="text/css">
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
      height: 350px;
      padding: 25px;
      margin-top : 100px;
      margin-left: auto;
      margin-right: auto;
      background: -webkit-linear-gradient(right, #e2b2ff, #f9d1d1);
    }
    </style>
</head>
<body>
    <form method="POST" action="editing_visimisi.php" enctype="multipart/form-data" >
    
    <section class="base">
    <center>
        <h1>Edit Visi & Misi</h1>
    <center>
        <input name="id" value="<?php echo $data['id']; ?>" hidden />
        <div>
          <label>Visi</label>
          <input type="text" name="visimisi" value="<?php echo $data['visi']; ?>" autofocus="" required="" />
          <label>Misi</label>
          <input type="text" name="visimisi" value="<?php echo $data['misi']; ?>" autofocus="" required="" />
        </div>
        <br>
        <div>
         <button type="submit">Save Changes</button>
        </div>
        </section>
      </form>
  </body>
</html>

</body>

   

