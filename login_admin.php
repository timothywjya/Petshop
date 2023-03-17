<?php
session_start();

include("connection.php");
function check_login($conn)
{
  if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $query = "SELECT * FROM tb_user where user_email = '$email' limit 1";

    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
      $user_data = mysqli_fetch_assoc($result);
      return $user_data;
    }
  }
  //redirect to login
  header("Location: login_admin.php");
  die;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  if (!empty($email)) {
    //read from database
    $query = "SELECT * FROM tb_user where user_email = '$email' limit 1";

    $result = mysqli_query($conn, $query);

    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        if ($user_data['user_password'] === $password) {
          $_SESSION['email'] = $user_data['user_email'];
          header("Location: dashboard.php");
          die;
        }
      }
    }
    echo "<script>alert('wrong email or password, please try again')</script>";
  } else {
    echo "<script>alert('wrong email or password, please try again')</script>";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
</head>

<body>
  <style type="text/css">
    body {
      background: -webkit-linear-gradient(bottom, #90e0ef, #f9d1d1);
      background-repeat: no-repeat;
    }

    #card {
      background: #fbfbfb;
      border-radius: 8px;
      box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
      height: 300px;
      margin: 11rem auto 13rem auto;
      width: 600px;
    }

    #card-content {
      padding: 15px 50px;
    }

    #card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 0px;
      padding-top: 0px;
      text-align: center;
    }

    .underline-title {
      background: -webkit-linear-gradient(right, #ffa4b6, #f9d1d1);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 300px;
    }

    .admin {
      align-items: right;
      padding-top: 15px;
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
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>DASHBOARD LOGIN</h2>
        <div class="underline-title"></div><br>
        <img class="admin" src="images/admin.png" width="150" height="150" align="right">
      </div>
      <form method="post" class="form">
        <label for="email" style="padding-top:13px">&nbsp;Email</label>
        <input id="email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <a href="forget-admin.php">
          <legend id="forgot-pass">Forgot password?</legend>
        </a>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
      </form>
    </div>
  </div>
</body>

</html>