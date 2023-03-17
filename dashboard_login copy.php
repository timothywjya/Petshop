<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="CSS/stylehome.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

  <title>Home Pet Shop</title>
</head>

<body>



  <!-- Awal Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:aqua">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="images/logo_felice.png" alt="" width="50" height="40" class="me-2">
        <strong>Felice Petshop</strong>
      </a>

      <a class="btn btn-primary" href="login_admin.php" role="button">Login</a>

    </div>
  </nav>
  <!-- Akhir Navbar -->

  <section id="title-contact" class="contact section-bg">
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