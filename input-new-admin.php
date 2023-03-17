<?php
include("connection.php");
$errors = [];
if (isset($_POST['submit'])) {
  if (isset($_POST['email']) && isset($_POST['new_password']) && isset($_POST['confirm_password']) && !empty($_POST['email']) && !empty($_POST['new_password']) && !empty($_POST['confirm_password'])) {
    $email = $_POST['email'];
    $new_password = md5(trim($_POST['new_password']));
    $confirm_password = md5(trim($_POST['confirm_password']));
    if ($new_password != $confirm_password) {
      echo "<script>alert('Password baru yang Anda masukkan tidak sama dengan password konfirmasi');window.location.href = './input-new-admin.php';</script>";
    } else {
      //read from database
      $query = "UPDATE tb_user SET user_password='$new_password' where user_email = '$email'";

      // count if result > 0
      if ($result = mysqli_query($conn, $query)) {
        session_start();
        session_unset();
        session_destroy();
        echo "<script>alert('Password berhasil diperbarui, silahkan login menggunakan password baru!');window.location.href = './login_admin.php';</script>";
      } else {
        echo "<script>alert('Terjadi error pada saat memperbarui password, silahkan coba lagi!');window.location.href = './input-new-admin.php';</script>";
      }
    }
  } else {
    if (empty($_POST['email'])) {
      $errors['email'] = "Harap isi email terlebih dahulu";
    }

    if (empty($_POST['new_password'])) {
      $errors['new_password'] = "Harap isi password baru";
    }

    if (empty($_POST['confirm_password'])) {
      $errors['confirm_password'] = "Harap isi password konfirmasi";
    }
  }
}
?>

<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="asset/style-forget-admin.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masukan Kata Sandi Baru</title>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>

<body>
  <section id="forget-password align-middle">
    <div class="container align-middle content-form">
      <div class="row forget-password">
        <div class="col-md-4 bg-danger text-center">
          <img class="img-thumbnail felice-logo" src="asset/images/logo_felice.png" alt="Felice Petshop">
          <h3 class="tagline text-white">Felice Petshop</h3>
        </div>

        <div class="col-md-8 bg-light">
          <h3 class="text-center">Hello, Admin! Change your Password</h3>
          <form action="" method="POST">
            <div class="mb-2 input-email">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" value="<?php
                                                                                      session_start();
                                                                                      echo $_SESSION['email'];
                                                                                      ?>" readonly>
              <p class="text-danger text-small"><?= $errors['email'] ?? '' ?></p>
            </div>
            <div class="mb-3 input-password">
              <label for="password-user-new" class="form-label">Kata Sandi Baru</label>
              <input type="password" class="form-control" name="new_password" id="password-user-new">
              <p class="text-danger text-small"><?= $errors['new_password'] ?? '' ?></p>
            </div>
            <div class="mb-3 input-password">
              <label for="password-user" class="form-label">Konfirmasi Kata Sandi Baru</label>
              <input type="password" class="form-control" name="confirm_password" id="password-user">
              <p class="text-danger text-small"><?= $errors['confirm_password'] ?? '' ?></p>
            </div>

            <button id="button-submit" class="btn btn-warning" type="Submit" name="submit">Reset Password</button>
          </form>

        </div>
      </div>
    </div>
  </section>
</body>

</html>