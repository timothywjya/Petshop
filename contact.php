<?php include 'connection.php'; ?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="icon" href="images/logo_felice.png">
  <link href="./asset/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="./CSS/contact.css">
  <title>Kontak Kami - Felice Petshop</title>
</head>

<body>
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

  <section id="title-contact" class="contact section-bg mt-4">
    <div class="container-fluid container">
      <div class="section-title">
        <h2>Our Contact - Felice Petshop</h2>
        <h3>Get In Touch With
          <span>Us</span>
        </h3>
        <p>Fur You Only</p>
      </div>
    </div>
  </section>

  <section id="iframe-map">
    <div class="container-iframe">

      <?php
      $sql = "";
      $sql = "SELECT * FROM tb_maps WHERE peta_id=1";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_assoc($result)) {
          $peta_id = $rows['peta_id'];
          $data_peta = $rows['data_peta'];
      ?>

          <iframe class="responsive-iframe" src="<?php echo $data_peta ?>" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">>
          </iframe>

          <!--Yang di copy bagian src aja, karena dibagian sini ada class-->

      <?php
        }
      }
      ?>
    </div>
  </section>

  <section id="detail-contact">
    <div class="container container-detail">
      <div class="row">
        <div class="col-md-6">
          <form class="row g-3">
            <div class="col-md-6">
              <label for="inputFName4" class="form-label">Nama Depan</label>
              <input type="text" class="form-control" id="inputFName4">
            </div>

            <div class="col-md-6">
              <label for="inputLName4" class="form-label">Nama Belakang</label>
              <input type="text" class="form-control" id="inputLName4">
            </div>

            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>

            <div class="col-md-12">
              <textarea id="textarea_message" cols="50" rows="6" placeholder="Message for Us..."></textarea>
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-primary">Send a Message</button>
            </div>
          </form>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <p class="description">Our Address</p>
              <img src="asset/images/maps-image.png" alt="maps" class="information">
              <p class="desc1">Ancol Barat VI<br>North Jakarta, DKI 14430</p>
            </div>

            <div class="col-md-6">
              <p class="description">Call Us</p>
              <img src="asset/images/phone-image.png" alt="phone" class="information">

              <?php
              $sql = "";
              $sql = "SELECT * FROM tb_nope ";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                while ($rows = mysqli_fetch_assoc($result)) {
                  $nope_id = $rows['nope_id'];
                  $nomor_hp = $rows['nomor_hp'];
                  $alt_hp = $rows['alt_hp']
              ?>

                  <p class="desc1"><?php echo $nomor_hp ?><br><?php echo $alt_hp ?></p>

                  <!--VARCHAR-->

              <?php
                }
              }
              ?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p class="description2">Working Hours</p>
              <img src="asset/images/clock-image.png" alt="clock" class="information">
              <p class="desc2">All Day<br>7:30AM to 4:30PM</p>
            </div>

            <div class="col-md-6">
              <p class="description2">Social Media</p>
              <div class="row">
                <div class="col-md-6">
                  <a href="https://www.facebook.com" target="_blank">
                    <img src="asset/images/facebook-image.png" alt="facebook" class="social-media">
                  </a>
                  <p class="text-media">Facebook</p>
                </div>

                <div class="col-md-6">
                  <a href="https://www.instagram.com" target="_blank">
                    <img src="asset/images/instagram-image.png" alt="instagram" class="social-media">
                  </a>
                  <p class="text-media">Instagram</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <a href="https://www.youtube.com" target="_blank">
                    <img src="asset/images/youtube-image.png" alt="youtube" class="social-media">
                  </a>
                  <p class="text-media">Youtube</p>
                </div>

                <div class="col-md-6">
                  <a href="https://www.web.whatsapp.com" target="_blank">
                    <img src="asset/images/whatsapp-image.png" alt="whatsapp" class="social-media">
                  </a>
                  <p class="text-media">Whatsapp</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Copyright -->
  <div class="text-center p-3 mt-4" style="background-color: rgba(0, 0, 0, 0.2); text-decoration: none;">
    © 2022 Copyright:
    <a class="text-dark" href="#">felice_petshop.com</a>
  </div>
  <!-- Copyright -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

</body>

</html>