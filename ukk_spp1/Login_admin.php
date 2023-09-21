<?php
session_start();
include 'koneksi.php';

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $cek_petugas = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username = '$username' AND password ='$password'");
    if(mysqli_num_rows($cek_user) > 0 ){
        $_SESSION['user'] = mysqli_fetch_array($cek_petugas);
        echo '<script>alert("Selamat,anda berhasil login");location.href="halaman_admin.php";</script>'; 
    }else{
        $cek_siswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn='$username' AND password='$password'");

        if(mysqli_num_rows($cek_siswa) > 0) {
            $_SESSION['user'] = mysqli_fetch_array($cek_siswa);
            echo '<script>alert("Selamat, anda berhasil login");location.href="halaman_admin.php";</script>'; 
        }else{
            echo '<script>alert("Username/NISN SALAH!")</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Pembayaran SPP</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>

<body>

    <div class="login-box">
        <h2>Login Sebagai Admin</h2>
        <form method="post">
            <div class="user-box">
                <input type="text" name="username" required="">
                <label>Username</label>
            </div>

            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>
            <a href="">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <button type="submit">Login</button>
            </a>
            <a href="Login_siswa.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Login siswa
            </a>

        </form>
    </div>
</body>

</html>