<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    body {
        background-image: url('images/school-walpaper.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<body>
        <div class=" formContainer">
        <h1 style="margin-bottom: 40px;">Masuk</h1>
        <div class="container">
            <form id="formMahasiswa" autocomplete="off" action="proses-login.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" minlength="1" maxlength="15">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" name="password" class="form-control" minlength="1" maxlength="20">
                </div>
                <button name="login" type="submit" class="btn btn-primary" style="margin-top: 20px; width: 100%;">Login</button>
            </form>
        </div>
        <?php if (isset($_GET['status'])) : ?>
            <br><br>
            <p>
                <?php
                if ($_GET['status'] == 'gagal') {
                    echo "<h5 style='color: red;'>Informasi Login Salah!</h5>";
                }
                ?>
            </p>
        <?php endif; ?>
    </div>
</body>

</html>