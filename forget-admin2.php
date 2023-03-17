<?php ?>

<!--Biasanya buat meletakan Authentification-->
<!--php require-->

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="asset/style-forget-admin.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lupa Kata Sandi - Admin</title>
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

                    <div class="col-md-8 bg-secondary bg-gradient">
                        <h3 class="text-center">Hello, Admin! Forgot your Password?</h3>
                        <form action="" method="POST">
                            <div class="mb-3 input-email">
                                <label for="email-user" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email-user" aria-describedby="emailHelp">
                            </div>

                            <button id="button-submit" class="btn btn-warning" type="Submit">Reset Password</button>
                                <?php
                                    if(isset($_POST['forgot-password'])){
                                        $email = $_POST['email'];
                                    }

                                    if(empty($email)){
                                        $errors['email'] = "email required";
                                    }

                                    if(count($errors)==0){
                                        $sql = "Select * From tb_admin where email='$email' LIMIT 1";
                                        $result = mysqli_query($conn, $sql);
                                    }
                                ?>
                                <!--Validate dan query bisa di taruh disini ^w^-->
                                <!--Validate email dan Connection-->
                                <!--https://www.youtube.com/watch?v=bWUSX8CzbRw | Referensi -->
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>