<!DOCTYPE html>
 <html>
<head>
 <title>CRUD Operation </title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body style=" background-image:url(img/walpepar2.png);
 background-size: cover; background-position: 0px -200px; "
 class="text-white bg-opacity-30">
<div class="container " style="padding-top: 50px;">
<h2 class="mb-2 text-center">
             List Online Table Reservation
            </h2>
            <p class="mb-6 text-center">
List pesanan kursi  disini  ~        </p>

<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,'SELECT * FROM pesan');
while($d = mysqli_fetch_array($data)){
?>
<table class="table table-bordered table-dark">
<thead>
<tr>

 <th>Nama_Lengkap</th>
 <th>Nomor_Telephone</th>
 <th>Email</th>
 <th>Person</th>
 <th>Tanggal</th>
 <th>Jam</th>


 </tr>
 

</thead>
  
<tr>

<td><?php echo $d['Nama_Lengkap']; ?></td>  
<td><?php echo $d['Nomor_Telephone']; ?></td>
<td><?php echo $d['Email']; ?></td>
<td><?php echo $d['Person']; ?></td>
<td><?php echo $d['Tanggal']; ?></td>
<td><?php echo $d['Jam']; ?></td>


<a href='edit.php?id=.$d->id.' class="btn btn-primary">Edit</a>

<a class="btn btn-danger" href="delete.php?id=<?php echo $d['Nama_Lengkap']; ?>">HAPUS</a>
</tr>
</table>


<?php
}
?>

</div>