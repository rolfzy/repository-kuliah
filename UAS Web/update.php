<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
if (isset($_POST['submit'])) {
    
    $Nama_Lengkap = $_POST['Nama_Lengkap'];
    $Nomor_Telephone = $_POST['Nomor_Telephone'];
    $Email = $_POST['Email'];
    $Tanggal = $_POST['Tanggal'];
    $Jam = $_POST['Jam'];

    $PersonSelect = $_POST['Person'];
    if ($PersonSelect == '1') {
        $Person = '1 Person';
    }
    if ($PersonSelect == '2') {
        $Person = '2 Persons';
    }
    if ($PersonSelect == '3') {
        $Person = '3 Persons';
    }
    if ($PersonSelect == '4') {
        $Person = '4 Persons';
    }
    if ($PersonSelect == '5') {
        $Person = '5 Persons';
    }

    // menginput data ke database
    $sqlupdate = "UPDATE pesan SET Nama_Lengkap= $Nama_Lengkap,Nomor_Telephone= '$Nomor_Telephone' ,Email='$Email' ,Person='$Person',Tanggal='$Tanggal',Jam='$Jam' WHERE " ;

    mysqli_query($koneksi, $sqlupdate);
    // mengalihkan halaman kembali ke index.php
    header("location:menuAdmin.php");
}