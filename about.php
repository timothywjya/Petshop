<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="./asset/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <script src="JS/bootstrap.bundle.min.js"></script>
  <script src="jquery-3.6.0.js"></script>

  <title>Felice Petshop | About Us</title>

  <style>
    body {
      background-color: aliceblue;
      font-family: 'Poppins', sans-serif;
      color: darkslateblue;
      font-size: 16px;
    }

    .dropdown-menu {
      text-decoration: none;
      display: none;
      position: absolute;
      margin-left: 0px;
      list-style: none;
    }

    .dropdown:hover .dropdown-menu {
      display: block;
      background-color: aqua;
      border: none;
    }

    .banner-atas {
      position: relative;
      opacity: 0.5;
      z-index: 1;
      top: 0;
    }

    .footer {
      background: aqua;
      text-align: center;
      font-size: 14px;
      color: black;
    }
  </style>
</head>

<body>
  <!-- Awal Navbar -->

  <nav class="navbar navbar-expand-xl navbar-light" style="background-color:aqua">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/logo_felice.png" alt="" width="50" height="40" class="me-2">
        <strong>Felice Petshop</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="fa fas fa-bars"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <img src="images/logo_felice.png" alt="" width="50" height="40" class="me-2">
            <strong>Felice Petshop</strong>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center my-1 flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./product.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact.php">Contact us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                <li><a class="dropdown-item" href="./services.php#pet_grooming">Pet Grooming</a></li>
                <li><a class="dropdown-item" href="./services.php#pet_clinic">Pet Clinic</a></li>
                <li><a class="dropdown-item" href="./services.php#pet_training">Pet Training</a></li>
                <li><a class="dropdown-item" href="./services.php#pet_hotel">Pet Hotel</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex me-4 my-1" role="search">
            <input class="form-control me-2 w-100" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-dark rounded" type="submit"><i class="fa fas fa-search"></i></button>
          </form>

          <a href="./login_admin.php" class="btn btn-primary my-1 px-4">Login</a>

        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <div class="container-fluid">
    <div class="banner-atas">
      <img src="images/cat-dog.jpg" width="100%" height="60%">
    </div><br><br>
    <div class="row">
      <?php
      $query = "SELECT * FROM sejarah WHERE 1";
      $result = mysqli_query($conn, $query);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $sejarah = $row['sejarah'];
      ?>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <div align="center"><img src="images/logo_felice.png" width="200"></div><br>
                <h5 class="card-title"><em><strong>Sejarah Felice Petshop</strong></em></h5>
                <p align="justify" class="card-text"><?php echo $sejarah; ?> </p>
              </div>
            </div>
        <?php
        }
      }
        ?>
          </div>

          <?php

          $query = "SELECT * FROM visimisi WHERE 1";
          $result = mysqli_query($conn, $query);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $visi = $row['visi'];
              $misi = $row['misi'];
          ?>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><em><strong>Visi dan Misi</strong></em></h5>
                    <p class="card-text"><strong>Visi</strong></p>
                    <ul>
                      <li align="justify" class="card-text"><?php echo $visi; ?> </li>
                    </ul>
                    <p class="card-text"><strong>Misi</strong></p>
                    <ul>
                      <li align="justify" class="card-text"><?php echo $misi; ?> </li>
                    </ul>
                  </div>
                </div>
              </div>
    </div>
  </div>
<?php
            }
          }
?>
<br>
<div align="center">
  <span class="badge rounded-pill bg-secondary" style="font-size:24px">OUR TOP SERVICES</span> <br><br>
</div>
<div class="container">
  <div class="row row-cols row-cols-md-3 g-5">
    <?php
    $query = "SELECT * FROM service WHERE 1";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $service = $row['service'];
    ?>
        <div class="col-md-4">
          <div class="card">
            <img a href="services.php" src="gambar/<?php echo $service; ?>" width="300" height="150">
          </div>
        </div>
    <?php
      }
    }
    ?>
  </div>
</div>
</div><br>
<div align="center">
  <span class="badge rounded-pill bg-secondary" style="font-size:24px">OUR TOP PRODUCTS</span> <br><br>
</div>
<div class="container">
  <div class="row row-cols row-cols-md-6 g-5">
    <?php
    $query = "SELECT * FROM product WHERE 1";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $product = $row['product'];
    ?>
        <div class="col-md-2">
          <div class="card" style="height:150">
            <img src="gambar/<?php echo $product; ?>" width="144" height="148" border="0">
          </div>
        </div>
    <?php
      }
    }
    ?>
  </div>
</div>
</div><br>
<!--Awal Footer-->
<div class="mt-5 pt-5 pb-0 footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-xs-12 about-company">
        <h2>
          <img src="images/logo_felice.png" width="75" height="75">
          Felice Petshop
        </h2>
        <p>
          Felice Petshop ini diambil dari kata "Felice" yang berasal dari bahasa Italia
          yang memiliki arti kesuksesan dan kebahagiaan. Kata "Felice" ini juga memiliki
          arti sifat yang nyaman dan optimis. begitu juga dengan keinginan yang dicapai
          oleh Petshop ini. Kami harap Felice Petshop ini pun nantinya akan memberikan
          kebahagiaan dan kesuksesan bagi banyak orang
        </p>
        <p>
          <a href="#"><i class="fa-brands fa-facebook-square"></i></a>
          <a href="#"><i class="fa-brands fa-instagram-square"></i></a>
          <a href="#"><i class="fa-brands fa-youtube-square"></i></a>
          <a href="#"><i class="fa-brands fa-whatsapp-square"></i></a>
        </p>
      </div>
      <div class="col-lg-3 col-xs-12 links">
        <h4 class="mt-lg-0 mt-sm-3">Navigation</h4>
        <ul class="m-0 p-0">
          <li>
            <a href="home.php">Home</a>
          </li>
          <li>
            <a href="about.php">About Us</a>
          </li>
          <li>
            <a href="product.php">Products</a>
          </li>
          <li>
            <a href="services.php">Services</a>
          </li>
          <li>
            <a href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-xs-12 location">
        <h4 class="mt-lg-0 mt-sm-4">Location</h4>
        <a href="#"><i class="fa-solid fa-map-location-dot"></i></a>
        <p>
          Ancol Barat VI <br>
          North Jakarta, DKI Jakarta 14439
        </p>
        <div class="mb-0">
          <a href="#"><i class="fa fa-phone mr-3"></i></i></a>
          <p>
            +62 878 3016 4296 <br>
            +62 812 2585 1706
          </p>
        </div>
        <a href="#"><i class="fa-solid fa-envelope"></i></a>
        <p><i class="fa fa-envelope-o mr-3"></i>felice_petshop@gmail.com</p>
      </div>
    </div>
  </div>
  <!--Awal Subscribe Email-->
  <div class="row d-flex justify-content-center">
    <div class="col-auto">
      <p class="pt-2">
        <strong>Sign up for our newsletter</strong>
      </p>
    </div>

    <div class="col-md-4 col-12">
      <div class="form-outline mb-4">
        <input type="email" id="form5Example27" class="form-control" placeholder="Email Address" />
        <label class="form-label" for="form5Example27"></label>
      </div>
    </div>

    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-4">
        Subscribe
      </button>
    </div>
  </div>
  <!--Akhir Subscribe Email-->

</div>
</div>

<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); text-decoration: none;">
  © 2022 Copyright:
  <a class="text-dark" href="">felice_petshop.com</a>
</div>
<!-- Copyright -->
<!--Akhir Footer-->
</body>

</html>