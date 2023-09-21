<?php
include 'koneksi.php';

$user = $_POST['username'];
$pass = md5($_POST['password']);
$sql = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$user' && password='$pass'");
$cari = mysqli_num_rows($sql);
$akses = mysqli_fetch_array($sql);
if($cek > 0){
	$data = mysqli_fetch_assoc($sql);
	if($data['level']=="admin"){
 
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:halaman_admin.php");
 
	}else if($data['level']=="user"){

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "siswa";

		header("location:halaman_siswa.php");
	}else{

		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>