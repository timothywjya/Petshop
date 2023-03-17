<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="CSS/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="asset/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="CSS/services.css" type="text/css">
  <script src="JS/services.js"></script>
  <script src="JS/bootstrap.bundle.min.js"></script>

  <title>Services Felice Pet Shop</title>
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

  <?php
  $sql = "SELECT * FROM `tb_titledesc` WHERE 1";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $title = $row['title'];
      $desc = $row['service_desc'];
    }
  }
  ?>
  <div class="container mt-4">
    <h1 class="text-center" style="font-size:52px; font-family:Georgia, Times New Roman, Times, serif"><?php echo $title; ?></h1>
    <p style="text-align:center"><?php echo $desc; ?></p>
  </div><br>
  <div class="container mt-4" id="services">
    <h1 class="text-center" id="pet_grooming">PET GROOMING</h1>
    <div class="row">
      <?php
      $sql = "SELECT * FROM `tb_grooming`";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $title = $row['title'];
          $img = $row['image'];
          $desc = $row['desc'];
          $detail = $row['detail'];
      ?>
          <div class="col-sm-3">
            <div class="card">
              <img src="images/<?php echo $img; ?>" alt="Card image" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title"><?php echo $title; ?></h4>
                <p class="card-text"><?php echo $desc; ?></p>
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#d_bathing">Details</button>
                <div class="modal" id="d_bathing">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Details <?php echo $title; ?></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body"><?php echo $detail; ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>
    </div><br><br>
  </div>
  <div class="container mt-4" id="services">
    <h1 class="text-center" id="pet_clinic">PET CLINIC</h1>
    <div class="row">
      <?php
      $sql = "SELECT * FROM `tb_clinic`";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $title = $row['title'];
          $img = $row['image'];
          $desc = $row['desc'];
          $detail = $row['detail'];
      ?>
          <div class="col-sm-3">
            <div class="card">
              <img src="images/<?php echo $img; ?>" alt="Card image" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title"><?php echo $title; ?></h4>
                <p class="card-text"><?php echo $desc; ?></p>
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#d_bathing">Details</button>
                <div class="modal" id="d_bathing">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Details <?php echo $title; ?></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body"><?php echo $detail; ?></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>
    </div>
    <?php
    $sql = "SELECT * FROM `tb_titledesc` WHERE 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $clinic_desc = $row['clinic_desc'];
      }
    }
    ?>
    <div class="container mt-4" style="text-align:center; font-family:Kristen ITC; font-size:15px ;border:#FF9900 solid; border-radius:10px; background-color:#FFFFCC; padding:5px 5px 10px">
      <?php echo $clinic_desc; ?>
    </div><br><br>
  </div>
  a
  <div class="container mt-4" id="services">
    <h1 class="text-center" id="pet_training">PET TRAINING</h1>
    <div class="row">
      <?php
      $sql = "SELECT * FROM `tb_training`";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $title = $row['title'];
          $img = $row['image'];
          $desc = $row['desc'];
          $price = $row['price'];
      ?>
          <div class="col-sm-3">
            <div class="card">
              <img src="images/<?php echo $img; ?>" alt="Card image" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title"><?php echo $title; ?></h4>
                <p class="card-text"><?php echo $desc; ?></p>
                <p class="price">💸 IDR <?php echo $price; ?></p>
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>
    </div><br><br>
  </div>

  <div class="container mt-4" id="services">
    <h1 class="text-center" id="pet_hotel" style="margin-bottom:30px">PET HOTEL</h1>
    <div id="demo" class="carousel slide" data-bs-ride="carousel" style="margin-bottom:30px">

      <?php
      $sql = "SELECT `img_id` FROM `tb_hotelimg`";
      $result = $conn->query($sql);
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
          <button type="button" data-bs-target="#demo" data-bs-slide-to="<?= $i; ?>" class=<?= $actives ?>></button>
        <?php $i++;
        } ?>
      </div>
      <div class="carousel-inner" style="border-radius:15px">
        <?php
        $i = 0;
        $sql = "SELECT * FROM `tb_hotelimg`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $img = $row['image'];
            $actives = '';
            if ($i == 0) {
              $actives = 'active';
            }
        ?>
            <div class="carousel-item <?= $actives; ?>">
              <img src="images/<?php echo $img; ?>" alt="Los Angeles" class="d-block" style="width:100%">
            </div>
        <?php $i++;
          }
        } ?>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    <?php
    $sql = "SELECT * FROM `tb_titledesc` WHERE 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $hotel_desc = $row['hotel_desc'];
      }
    }
    ?>
    <div class="container mt-4" style="text-align:center">
      <?php echo $hotel_desc; ?>
    </div><br><br>

    <div class="row">
      <?php
      $sql = "SELECT * FROM `tb_hotelprice` WHERE 1";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $pet_id = $row['pet_id'];
          $pet_type = $row['pet_type'];
          $price = $row['price'];
          $time_type = $row['time_type'];
      ?>
          <div class="col-sm-3">
            <div class="hotel_detail">
              <label><b><?php echo $pet_type; ?></b></label>
              <hr style="color:#000000; border:#FF6600 double">
              <p class="price">💸 IDR <?php echo $price; ?> / <?php echo $time_type; ?></p>
            </div>
          </div>
      <?php
        }
      }
      ?>
    </div><br><br>
  </div>

  <div class="container mt-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#form" id="btn-click">Click here to make reservation</button>
  </div>

  <div class="modal" id="form">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Reservation Form</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <form action="#" class="form-container">
          <div class="modal-body">
            <label for="nama" id="nama">Nama</label>
            <input type="text" class="box" id="nama" placeholder="Masukkan nama Anda" name="nama" required>

            <div class="mb-2">
              <label class="mb-2" for="tipe">Jenis</label>
              <select name="tipe" class="box" id="tipe" onChange="ShowType()">
                <option value="all">All</option>
                <option value="grooming">Pet Grooming</option>
                <option value="clinic">Pet Clinic</option>
                <option value="training">Pet Training</option>
                <option value="hotel">Pet Hotel</option>
              </select>
            </div>
            <label class="mb-2" for="select" id="select">Checklist what services that you want to your pet.</label>
            <div class="mb-2" id="checkbox1">
              <input type="checkbox">
              <label for="grooming1"> Bathing</label><br>
              <input type="checkbox">
              <label for="grooming2"> Teeth brushing</label><br>
              <input type="checkbox">
              <label for="grooming3"> Brush out</label><br>
              <input type="checkbox">
              <label for="grooming4"> Style cuts</label><br>
              <input type="checkbox">
              <label for="grooming5"> Nail trimming</label><br>
              <input type="checkbox">
              <label for="grooming6"> Ear cleaning</label><br>
            </div>
            <div class="mb-2" id="checkbox2">
              <input type="checkbox">
              <label for="clinic1"> Vaccination</label><br>
              <input type="checkbox">
              <label for="clinic2"> Food and diet plan</label><br>
              <input type="checkbox">
              <label for="clinic3"> Skin treatment</label><br>
              <input type="checkbox">
              <label for="clinic4"> Dental Care</label><br>
            </div>
            <div class="mb-2" id="checkbox3">
              <input type="checkbox">
              <label for="training1"> Behavioral training</label><br>
              <input type="checkbox">
              <label for="training2"> Obedience training</label><br>
              <input type="checkbox">
              <label for="training3"> Swimming training</label><br>
              <input type="checkbox">
              <label for="training3"> Tricks training</label><br>
            </div>
            <div class="mb-2" id="checkbox4">
              <input type="checkbox">
              <label for="hotel1"> Hotel --- Jumlah hari penitipan </label>
              <input type="number" min="1" style="width:70px">
            </div>

            <div class="mb-4">
              <label for="date-time">Date</label>
              <input type="date" class="box" id="date" name="date" required>
            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="btn-reserve">Reserve</button> &emsp;
            <button type="button" class="btn danger" data-bs-dismiss="modal" id="btn-cancel">Cancel</button><br><br>
          </div>
        </form>
      </div>
    </div>
  </div><br><br><br><br>

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