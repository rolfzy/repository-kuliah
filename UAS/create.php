<?php
 session_start();

 if(isset($_POST['submit'])){
 require 'config.php';

 $bulkWrite = new MongoDB\Driver\BulkWrite;
 $bulkWrite->insert(['nomer_penerbangan' => $_POST['nomer_penerbangan'], 'kota_keberangkatan' =>
$_POST['kota_keberangkatan'], 'tujuan' =>
$_POST['tujuan'], 'jam_berangkat' =>
$_POST['jam_berangkat'], 'jam_tiba' =>
$_POST['jam_tiba']]);
$manager->executeBulkWrite("JadwalPesawat.jadwal_Terbang", $bulkWrite);

 $_SESSION['success'] = "Jadwal created successfully";
 header("Location: index.php");
 }
 ?>

 // File HTML
 <!DOCTYPE html>
 <html>
 <head>
 <title>PHP & MongoDB - CRUD Operation Tutorials -
 Nama:Rofik Adam Nugraha - NPM:2142014 </title>
 <link
href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/boot
strap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Create Jadwal</h1>
<a href="index.php" class="btn btn-primary">Back</a>
<form method="POST">
<div class="form-group">
<strong>nomer_penerbangan:</strong>
<input type="text" name="nomer_penerbangan" required=""
class="form-control" placeholder="Masukkan Nomer penerbangan">
 </div>
 <div class="form-group">
<strong>kota_keberangkatan:</strong>
<input type="text" name="kota_keberangkatan" required=""
class="form-control" placeholder=" Masukkan kota Keberangkatan">
 </div>
 <div class="form-group">
<strong>tujuan:</strong>
<input type="text" name="tujuan" required=""
class="form-control" placeholder="Masukkan Tujuan">
 </div>
 <div class="form-group">
<strong>jam_berangkat:</strong>
<input type="text" name="jam_berangkat" required=""
class="form-control" placeholder=" Masukkan jam Berangkat">
 </div>
 <div class="form-group">
 <strong>jam_tiba:</strong>
 <textarea class="form-control" name=" jam_tiba"
placeholder=" Masukkan jam Tiba" ></textarea>
 </div>
 <div class="form-group">
 <button type="submit" name="submit" class="btn
btn-success">Submit</button>
 </div>
 </form>
 </div>
 </body>
 </html>