<?php include("../config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet/less" type="text/css" href="../css/main.less" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1"></script>
    <title>Dashboard</title>
</head>

<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['role'] == "") {
        header("location:index.php?pesan=gagal");
    }

    ?>

    <?php
    $id = $_SESSION['id'];
    $sql_image = "SELECT * FROM siswa WHERE akun_id = '$id'";
    $query_image = mysqli_query($db, $sql_image);
    $image = mysqli_fetch_assoc($query_image);
    ?>

    <nav class="menu" tabindex="0">
        <div class="smartphone-menu-trigger"></div>
        <header class="avatar">
            <?php
            echo "<img src='../images/" . $image['foto'] . "'/>";
            echo "<h2>" . $image['nama'] . "</h2>";
            ?>
        </header>
        <ul>
            <a href="../siswa/halaman-siswa.php">
                <li tabindex="0" class="icon-dashboard"><span>Result Viewing</span></li>
            </a>
            <a href="../logout.php">
                <li tabindex="0" class="icon-logouts"><span>Logout</span></li>
            </a>
        </ul>
    </nav>

    <?php
    $sql = "SELECT * FROM nilai WHERE siswa_id = '$id'";
    $query = mysqli_query($db, $sql);
    $nilai = mysqli_fetch_assoc($query)
    ?>

    <h1 class="mt-5">Hasil Evaluasi Semester</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <i class="icon-graph text-success display-4 float-left"></i>
                            </div>
                            <div class="media-body text-right">
                                <?php
                                echo "<h2 class='text-success'>" . $nilai['matematika'] . "</h2>";
                                ?>
                                <span>Matematika</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <i class="icon-magnet text-danger display-4 float-left"></i>
                            </div>
                            <div class="media-body text-right">
                                <?php
                                 echo "<h2 class='text-danger'>" . $nilai['fisika'] . "</h2>";
                                ?>
                                <span>Fisika</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <i class="icon-chemistry text-warning display-4 float-left"></i>
                            </div>
                            <div class="media-body text-right">
                                <?php
                                 echo "<h2 class='text-warning'>" . $nilai['kimia'] . "</h2>";
                                ?>
                                <span>Kimia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <i class="icon-energy text-info display-4 float-left"></i>
                            </div>
                            <div class="media-body text-right">
                                <?php
                                 echo "<h2 class='text-info'>" . $nilai['biologi'] . "</h2>";
                                ?>
                                <span>Biologi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <i class="icon-map text-success display-4 float-left"></i>
                            </div>
                            <div class="media-body text-right">
                                <?php
                                 echo "<h2 class='text-success'>" . $nilai['geografi'] . "</h2>";
                                ?>
                                <span>Geografi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <i class="icon-wallet text-danger display-4 float-left"></i>
                            </div>
                            <div class="media-body text-right">
                                <?php
                                 echo "<h2 class='text-danger'>" . $nilai['ekonomi'] . "</h2>";
                                ?>
                                <span>Ekonomi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <i class="icon-support text-warning display-4 float-left"></i>
                            </div>
                            <div class="media-body text-right">
                                <?php
                                 echo "<h2 class='text-warning'>" . $nilai['bahasa_inggris'] . "</h2>";
                                ?>
                                <span>Bahasa Inggris</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <i class="icon-badge text-info display-4 float-left"></i>
                            </div>
                            <div class="media-body text-right">
                                <?php
                                 echo "<h2 class='text-info'>" . $nilai['olahraga'] . "</h2>";
                                ?>
                                <span>Olahraga</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>