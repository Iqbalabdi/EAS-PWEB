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

<body>
    <header>
        <a href="menu.php"><img src="images/sso.png" alt="gambar"></a>
    </header>
    <div class=" formContainer" style="margin-top: 80px; margin-bottom: 80px">
        <h1 style="margin-bottom: 40px;">Form Pendaftaran Calon Siswa</h1>
        <div class="container">

            <form id="formMahasiswa" autocomplete="off" action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Calon Siswa" class="form-control" minlength="3" maxlength="40">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap Siswa"></textarea>
                </div>
                <div class="form-group">
                    <label for="sekolah_asal">Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" placeholder="Sekolah Asal Calon Siswa" class="form-control" minlength="1">
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <select name="agama" class="form-control">
                        <option>Pilih Agama Calon Siswa</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label><br>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label><br><br>
                    <input type="file" name="foto" value=""><br><br>
                    <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin menambahkan foto<br>
                </div>
                <button name="daftar" type="submit" class="btn btn-primary" style="margin-top: 20px;">Daftar</button>
            </form>
        </div>
    </div>
    <footer>
        <h6>&copy All Rights Reserved.</h6>
    </footer>
</body>

</html>