<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="CSS/stylehome.css">
  <link rel="stylesheet" type="text/css" href="./asset/fontawesome/css/all.min.css">

  <title>Home Pet Shop</title>
</head>

<body>

  <?php
  include "connection.php";
  ?>



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



  <center>
    <h1>Pet Shop</h1>
  </center>

  <!--Awal Vidio-->
  <div class="container" id="main-video">
    <?php
    $sSQL = "";
    $sSQL = " select * from tb_video limit 1";
    $result = mysqli_query($conn, $sSQL);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $file_video = "images/" . trim($row['file_video']);
      }
    }
    mysqli_free_result($result);
    ?>
    <video width="100%" height="auto" controls allow="picture-in-picture" allowfullscreen autoplay muted loop>
      <source src="<?php echo $file_video; ?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
  <!--Akhir Video-->

  <center>
    <h2>Our Services</h2>
  </center>

  <!--Awal Carousel-->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <?php
    $sSQL = "";
    $sSQL = " select id from tb_our_service";
    $result = mysqli_query($conn, $sSQL);
    ?>

    <div class="carousel-indicators">
      <?php
      $i = 0;
      foreach ($result as $row) {
        $actives = '';
        if ($i == 0) {
          $actives = 'active';
        }
      ?>

        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i; ?>" class=<?= $actives ?>></button>

      <?php
        $i++;
      }
      ?>
    </div>

    <div class="carousel-inner">
      <?php
      $i = 0;
      $sSQL = " select * from tb_our_service";
      $result = mysqli_query($conn, $sSQL);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $title = $row['title'];
          $description = $row['description'];
          $file_image = $row['file_image'];
          $actives = '';
          if ($i == 0) {
            $actives = 'active';
          }
      ?>

          <div class="carousel-item <?= $actives; ?>">
            <img src="images/<?php echo $file_image; ?>" class="d-block w-100" alt="" style="width:100%">
            <div class="carousel-caption d-none d-md-block">
              <h5><?php echo $title; ?></h5>
              <p><?php echo $description; ?></p>
            </div>
          </div>
      <?php
          $i++;
        }
      }
      mysqli_free_result($result);
      ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!--Akhir Carousel-->




  <center>
    <h2>Top Products</h2>
  </center>

  <!--Awal Card-->
  <div class="card-group" id="top-product">
    <div class="row">
      <?php
      $sSQL = "";
      $sSQL = " select * from tb_top_product";
      $result = mysqli_query($conn, $sSQL);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $title = $row['title'];
          $description = $row['description'];
          $web = $row['web'];
          $file_image = $row['file_image'];
      ?>
          <div class="col-sm-4">
            <div class="Card">
              <img src="images/<?php echo $file_image ?>" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title"><?php echo $title; ?></h5>
                <p class="card-text"><?php echo $description; ?></p>
                <div class="link-product">
                  <a href="<?php echo $web; ?>">
                    <button type="button" class="btn btn-info">Cek</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </div>
  <!--Akhir Card-->


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





  <script src="JS/bootstrap.js"></script>
  <script src="JS/bootstrap.min.js"></script>

</body>

</html>