<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="asset/style-forget.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Masukan Kata Sandi Baru</title>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    </head>

    <body>
    <section id="forget-password align-middle">
            <div class="container align-middle content-form">
                <div class="row forget-password">
                    <div class="col-md-4 bg-sucess text-center">
                        <img class="img-thumbnail felice-logo" src="asset/images/logo_felice.png" alt="Felice Petshop">
                        <h3 class="tagline text-white">Felice Petshop</h3>
                    </div>

                    <div class="col-md-8 bg-secondary bg-gradient">
                        <h3 class="text-center">Hello, User! Change your password</h3>
                        <form action="" method="POST">
                            <div class="mb-3 input-email">
                                <label for="password-user-new" class="form-label">Kata Sandi Baru</label>
                                <input type="password" class="form-control" id="password-user-new">
                            </div>

                            <div class="mb-3 input-password">
                                <label for="password-user" class="form-label">Konfirmasi Kata Sandi Baru</label>
                                <input type="password" class="form-control" id="password-user">
                            </div>

                            <button id="button-submit" class="btn btn-warning" type="Submit">Reset Password</button>
                        </form>

                        <?php
                        if (isset($_POST['submit'])) {
                            if ($_POST['password_lama'] != $data['password']) {
                                echo "<script>alert('Password lama anda salah');</script>";
                            } elseif ($_POST['password_baru'] != $_POST['confirm_password']) {
                                echo "<script>alert('Password baru dengan Konfirmasi Password tidak sama');</script>";
                            } else {
                                $koneksi->query("UPDATE tb_admin SET password='$_POST[password_baru]' WHERE id_admin='$idpengguna'");
                                echo "<script>alert('Password berhasil diubah');</script>";
                                echo "<script>location='profil.php';</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>