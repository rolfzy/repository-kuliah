<?php
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi database
include 'koneksi.php';
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where
username='$username' and password='$password'");
// Memeriksa record data pada tabel admin
$cek = mysqli_num_rows($data);
if($cek > 0){
$_SESSION['username'] = $username;
$_SESSION['status'] = "login";
header("location:menuAdmin.php");
}else{
header("location:index.php?pesan=gagal");
}
?>