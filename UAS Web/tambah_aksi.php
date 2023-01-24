
<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form

$Nama_Lengkap = $_POST['Nama_Lengkap'];
$Nomor_Telephone = $_POST['Nomor_Telephone'];
$Email = $_POST['Email'];
$Tanggal = $_POST['Tanggal'];
$Jam = $_POST['Jam'];

$PersonSelect = $_POST['Person'];
if ($PersonSelect == '1'){
    $Person = '1 Person';
}if ($PersonSelect == '2'){
    $Person = '2 Persons';
}if ($PersonSelect == '3'){
    $Person = '3 Persons';
}if ($PersonSelect == '4'){
    $Person = '4 Persons';
}if ($PersonSelect == '5'){
    $Person = '5 Persons';
}

// menginput data ke database
mysqli_query($koneksi,"INSERT into pesan(Nama_Lengkap,Nomor_Telephone,Email,Person,Tanggal,Jam)
values('$Nama_Lengkap','$Nomor_Telephone','$Email','$Person','$Tanggal','$Jam')");
// mengalihkan halaman kembali ke index.php
header("location:pesan.php");
