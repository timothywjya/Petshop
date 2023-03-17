<!DOCTYPE html>
<html>

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/d6e2976fee.js" crossorigin="anonymous"></script>
  <link href="CSS/product.css" rel="stylesheet">



</head>

<body>
  <?php
  include "connection.php";
  ?>
  <!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
        </button> -->

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


  <div class="input-group rounded">
    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
    <span class="input-group-text border-0" id="search-addon">
      <i class="fas fa-search"></i>
    </span>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Diri</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap"> <br>
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Alamat Tujuan"> <br>
            <label for="exampleFormControlInput1" class="form-label">Email / No HP</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email / No HP"> <br>
            <label for="exampleFormControlInput1" class="form-label">Jumlah Pesanan</label>
            <input type="number" min="1" max="30" value="1" class="form-control" id="exampleFormControlInput1">
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="dropdown1">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      Category
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      <li><a class="dropdown-item" href="dog.php">Dog Food</a></li>
      <li><a class="dropdown-item" href="cat.php">Cat Food</a></li>
      <li><a class="dropdown-item" href="product.php">Pet Product</a></li>
    </ul>
  </div>
  <!--Awal Card-->
  <section class="section-products">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-8 col-lg-6">
          <div class="header">
            <h2>Pet Product</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $sSQL = "select * from tb_product where flag_active = 1 ";

        $result = mysqli_query($conn, $sSQL);
        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) {

            $file_image = "images/" . trim($row['file_image']);
            $title = $row['title'];
            $harga = $row['harga'];

        ?>
            <div class="col-md-6 col-lg-4 col-xl-3">

              <div id="product-1" class="single-product" data-bs-toggle="modal" data-bs-target="#exampleModal">

                <div class="part-2">
                  <img src="<?php echo $file_image; ?>" class="img-fluid">
                  <h3 class="product-title"><?php echo $title; ?></h3>
                  <h4 class="product-price"><?php echo "Rp." . $harga; ?></h4>
                </div>

              </div>
            </div>
        <?php
          }
          mysqli_free_result($result);
        }


        ?>
      </div>

  </section>
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

</body>

</html>