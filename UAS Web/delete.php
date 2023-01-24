
<?php

// Membuat koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_pesanan");

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Menghapus data
$sql = "DELETE FROM nama_tabel WHERE Nama_Lengkap = Nama_Lengkap";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dihapus";
} else {
    echo "Error menghapus data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

