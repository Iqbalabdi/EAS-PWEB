<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet/less" type="text/css" href="../css/main.less" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1" ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>

  <?php
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

<!-- <nav class="menu" tabindex="0">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
		<img src="../images/admin.png" />
    <h2>Admin</h2>
  </header>
	<ul>
    <a href="../admin/halaman-admin.php"><li tabindex="0" class="icon-dashboard"><span>Dashboard</span></li></a>
    <a href="../admin/siswa-management.php"><li tabindex="0" class="icon-users"><span>Student Management</span></li></a>
    <a href="../logout.php"><li tabindex="0" class="icon-logout"><span>Logout</span></li></a>
  </ul>
</nav> -->

<?php include('../layout/menu-admin.php') ?>

<main>
  <div class="helper">
      <h2>Selamat Datang</h2>
  </div>
</main>

      <?php if (isset($_GET['status'])) : ?>
                <br><br><br>
                <p>
                    <?php
                    if ($_GET['status'] == 'sukses') {
                        echo "<h3>Pendaftaran siswa baru berhasil!</h3>";
                    } else {
                        echo "<br><br><h3>Pendaftaran gagal!</h3>";
                    }
                    ?>
                </p>
            <?php endif; ?>

</body>
</html>
