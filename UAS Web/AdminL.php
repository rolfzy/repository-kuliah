
<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<title> Login </title>
</head>
<body style=" background-image:url(img/Walpepa.png);
 background-size: cover; background-position: 0px -200px; "
 class="text-white bg-opacity-30">
<h2>Login Database </h2>
<br/>
<!-- cek pesan notifikasi -->
<?php
if(isset($_GET['pesan'])){
if($_GET['pesan'] == "gagal"){
echo "Login gagal! username dan password salah!";
}else if($_GET['pesan'] == "logout"){
echo "Anda telah berhasil logout";
}else if($_GET['pesan'] == "belum_login"){
echo "Anda harus login untuk mengakses halaman admin";
}
}
?>
<div>
    <div class="container">
<form method="post" action="cek_login.php">
<table>
<tr>
<div class="mb-3 row">
    <label for="inputUsername" class="col-sm-2 col-form-label" >username</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputUsername" name="username">
    </div>
</tr>
<tr>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword" name="password">
    </div>
<tr>
<td></td>
<td></td>
<td><input type="submit" value="LOGIN"></td>
</tr>
</table>
</form>

</body>
</html>
