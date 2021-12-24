<?php
include("../config.php");

if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "Select * From siswa Where id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet/less" type="text/css" href="../css/main.less" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1"></script>
</head>

<body>
    <?php include('../layout/menu-admin.php') ?>
    <div class=" formContainer" style="margin-top: 80px; margin-bottom: 80px">
        <h1 style="margin-bottom: 40px;">Form Edit Data Siswa</h1>
        <div class="container">
            <form id="formMahasiswa" autocomplete="off" action="proses-edit.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Calon Siswa" class="form-control" minlength="3" maxlength="40" value="<?php echo $siswa['nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap Siswa"><?php echo $siswa['alamat'] ?></textarea>
                </div>
                <div class=" form-group">
                    <label for="sekolah_asal">Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" placeholder="Sekolah Asal Calon Siswa" class="form-control" minlength="1" value="<?php echo $siswa['sekolah_asal'] ?>">
                </div>
                <div class=" form-group">
                    <label for="agama">Agama</label>
                    <?php $agama = $siswa['agama']; ?>
                    <select name="agama" class="form-control">
                        <option>Pilih Agama Calon Siswa</option>
                        <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                        <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                        <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                        <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                        <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label><br>
                    <?php $jk = $siswa['jenis_kelamin']; ?>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked" : "" ?>> Laki-laki<br>
                    <input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked" : "" ?>> Perempuan<br>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label><br><br>
                    <input type="file" name="foto" value=""><br><br>
                    <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
                </div>
                <button name="simpan" type="submit" class="btn btn-primary" style="margin-top: 20px;">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>