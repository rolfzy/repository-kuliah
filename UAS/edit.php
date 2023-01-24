<?php
session_start();
require 'config.php';
$filter = ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])];
$option = [];
$query = new MongoDB\Driver\Query($filter, $option);
$jadwals = $manager->executeQuery("JadwalPesawat.jadwal_Terbang", $query);
foreach ($jadwals as $jadwal) {};

 if(isset($_POST['submit'])){

 // Menangkap data yang dikirim dari form dan proses Update
 $bulkWrite = new MongoDB\Driver\BulkWrite();
 $bulkWrite->update(
 ['_id'=>new MongoDB\BSON\ObjectID($_GET['id'])],
 ['$set'=>['nomer_penerbangan'=>$_POST['nomer_penerbangan'],'kota_keberangkatan'=>$_POST['kota_keberangkatan'],
 'tujuan'=>$_POST['tujuan'],'jam_berangkat'=>$_POST['jam_berangkat'],'jam_tiba'=>$_POST['jam_tiba'],
]]
 );

 // Proses update dan pengecekan hasil
 $result=$manager->executeBulkWrite("JadwalPesawat.jadwal_Terbang",
$bulkWrite);

 if($result) {

 $_SESSION['success'] = "Jadwal updated successfully";

 header("Location: index.php");
 }
 }
 ?>

 // Kode HTML
 <!DOCTYPE html>
 <html>
<head>
 <title>PHP & MongoDB - CRUD Operation Tutorials -
ItSolutionStuff.com</title>
 <link
href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/boot
strap.min.css" rel="stylesheet" crossorigin="anonymous">
 </head>
 <body>

 <div class="container">
 <h1> Edit Jadwal</h1>
 <a href="index.php" class="btn btn-primary">Back</a>

 <form method="POST">
 <div class="form-group">
 <strong>nomer_penerbangan:</strong>
 <input type="text" name="nomer_penerbangan" value="<?php echo
$jadwal->nomer_penerbangan; ?>" required="" class="form-control">

 </div>
 <div class="form-group">
 <strong>kota_keberangkatan:</strong>
 <textarea class="form-control" name="kota_keberangkatan"
placeholder="kota_keberangkatanl"> <?php echo $jadwal->kota_keberangkatan; ?></textarea>

 </div>
 <div class="form-group">
 <strong>tujuan</strong>
 <textarea class="form-control" name="tujuan"
placeholder="Masukkan Tujuan"> <?php echo $jadwal->tujuan; ?></textarea>

 </div>
 <div class="form-group">
 <strong>jam_berangkat:</strong>
 <textarea class="form-control" name="jam_berangkat"
placeholder="Masukkan Tujuan"> <?php echo $jadwal->jam_berangkat; ?></textarea>

 </div>
 <div class="form-group">
 <strong>jam_tiba</strong>
 <textarea class="form-control" name="jam_tiba"
placeholder="Masukkan Jam Tiba"> <?php echo $jadwal->jam_tiba; ?></textarea>

 </div>
 </div>
 <div class="form-group">

 <button type="submit" name="submit" class="btn btn-
success">Submit</button>

 </div>
 </form>
 </div>
 </body>
 </html>