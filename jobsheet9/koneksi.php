<?php
$host = "localhost"; // Nama host server database (biasanya localhost)
$user = "root";      // Username database (default XAMPP adalah root)
$password = "Iqbal526";      // Password database (default XAMPP adalah kosong)
$database = "prakwebdb"; // Ganti dengan nama database yang Anda buat
$connect = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>