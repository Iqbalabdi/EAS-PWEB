<?php

session_start();

include("config.php");

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "Select * from akun where username='$username' && password='$password'";
    $query = mysqli_query($db, $sql);
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {

        $data = mysqli_fetch_assoc($query);


        // cek jika user login sebagai admin
        if($data['role']=="admin"){

            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:admin/halaman-admin.php");

        // cek jika user login sebagai siswa
        }else if($data['role']=="siswa"){
            // buat session login dan username
            $_SESSION['id'] = $data['id'];
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "siswa";
            // alihkan ke halaman dashboard siswa
            header("location:siswa/halaman-siswa.php");
        }

        //header('Location: admin/halaman-admin.php');
    } else {
        header('Location: index.php?status=gagal');
    }
}
?>