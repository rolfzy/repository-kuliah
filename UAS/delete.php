<?php

 session_start();
 require 'config.php';

 $delete = new MongoDB\Driver\BulkWrite();
 $delete->delete(['_id' => new
MongoDB\BSON\ObjectId($_GET['id'])], ['limit'=>true]);
$manager->executeBulkWrite("JadwalPesawat.jadwal_Terbang", $delete);
 $_SESSION['success'] = "Mantap, Jadwal deleted successfully";
 header("Location: index.php");
 ?>