<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./asset/fontawesome/css/all.min.css">
</head>

<body>
  <style type="text/css">
    body {
      background: -webkit-linear-gradient(bottom, #90e0ef, #f9d1d1);
      background-repeat: no-repeat;
      min-height: 100vh;
      height: 100%;
    }

    a {
      text-decoration: none;
    }

    label {
      font-family: "Raleway", sans-serif;
      font-size: 11pt;
    }

    #forgot-pass {
      color: #ffa4b6;
      font-family: "Raleway", sans-serif;
      font-size: 10pt;
      margin-top: 3px;
      text-align: left;
    }

    .form {
      align-items: left;
      display: flex;
      flex-direction: column;
    }

    .form-border {
      background: -webkit-linear-gradient(right, #ffa4b6, #f9d1d1);
      height: 1px;
      width: 75%;
    }

    .form-content {
      background: #fbfbfb;
      border: none;
      outline: none;
      padding-top: 14px;
    }

    #submit-btn {
      background: -webkit-linear-gradient(right, #90e0ef, #f9d1d1);
      border: none;
      border-radius: 21px;
      box-shadow: 0px 1px 8px #90e0ef;
      cursor: pointer;
      color: black;
      font-family: "Raleway SemiBold", sans-serif;
      height: 42.3px;
      margin: 50px;
      margin-top: 10px;
      transition: 0.25s;
      width: 153px;
    }

    #submit-btn:hover {
      box-shadow: 0px 1px 18px #f9d1d1;
    }
  </style>
  <section class="mx-auto d-block" style="margin-top: 100px;">
    <div class="container justify-content-center align-middle content-form">
      <div class="row">
        <div class="col-md-12 card">
          <div class="row">
            <div class="col-md-4 p-4 bg-danger text-center">
              <img class="felice-logo" src="asset/images/logo_felice.png" height="200" alt="Felice Petshop">
              <h3 class="display-6 text-white mt-4">Felice Petshop</h3>
            </div>

            <div class="col-md-8 p-4 bg-light">
              <h3 class="text-center">Hello, Admin! Forgot your Password?</h3>
              <form action="" method="POST" class="mt-4">
                <?php
                $errors = [];
                if (isset($_POST['forgot-password'])) {
                  if (isset($_POST['email-user']) && !empty($_POST['email-user'])) {
                    $email = $_POST['email-user'];
                    //read from database
                    $query = "SELECT * FROM tb_user where user_email = '$email' limit 1";

                    $result = mysqli_query($conn, $query);

                    // check if email found in database
                    if (mysqli_num_rows($result) > 0) {
                      session_start();
                      $_SESSION['email'] = $email;
                      echo "<script>alert('Email valid, go ahead!');window.location.href = './input-new-admin.php';</script>";
                    }
                  } else {
                    $errors['email'] = "Please insert valid email";
                  }
                }
                ?>
                <div class="mb-3 input-email">
                  <label for="email-user" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email-user" id="email-user" aria-describedby="emailHelp">
                  <p class="text-danger text-small"><?= $errors['email'] ?? '' ?></p>
                </div>

                <button id="button-submit" name="forgot-password" class="btn btn-warning" type="Submit">Reset Password</button>
                <a class="btn btn-primary" href="./login_admin.php">Back to login page</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>