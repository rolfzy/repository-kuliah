<?php
 session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>PHP & MongoDB - CRUD Operation -</title>
 <link
href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/boot
strap.min.css" rel="stylesheet" crossorigin="anonymous">
 </head>
 <body> <div class="container">
 <h1><center>PHP & MongoDB - CRUD Jadwal Pesawat -
    Nama:Rofik Adam Nugraha - NPM:2142014 
</center></h1>
 <a href="create.php" class="btn btn-success">Add Jadwal</a>


 <?php


 if(isset($_SESSION['success'])){

 echo "<div class='alert alert-
success'>".$_SESSION['success']."</div>";

 }
 ?>

 <table class="table table-borderd">
 <tr>
 <th>No</th>
 <th>_id</th>
 <th>Nomer_penerbangan</th>
 <th>Kota_keberangkatan</th>
 <th>Tujuan</th>
 <th>Jam_berangkat</th>
 <th>Jam_tiba</th>

 </tr>
 <?php

 require 'config.php';
 $no=0;
 $query = new MongoDB\Driver\Query( [] );
 $jadwals = $manager->executeQuery("JadwalPesawat.jadwal_Terbang",
$query);
 foreach($jadwals as $jadwal) {
 $no++;
 echo "<tr>";
 echo "<td>".$no."</td>";
 echo "<td>".$jadwal->_id."</td>";
 echo "<td>".$jadwal->nomer_penerbangan."</td>";
 echo "<td>".$jadwal->kota_keberangkatan."</td>";
 echo "<td>".$jadwal->tujuan."</td>";
 echo "<td>".$jadwal->jam_berangkat."</td>";
 echo "<td>".$jadwal->jam_tiba."</td>";


 echo "<td>";

 echo "<a href='edit.php?id=".$jadwal->_id."' class='btn btn-
primary'>Edit</a>";

 echo "<a href='delete.php?id=".$jadwal->_id."' class='btn
btn-danger'>Delete</a>";
 echo "</td>";
 echo "</tr>";
 };
 ?>

 </table>
 </div>
 </body>
 </html>