<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user WHERE username='$username' and password='$password'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result); // Mengambil data 1 baris hasil query

if ($row['level'] == 1) { // Level 1 untuk admin
    echo "Anda berhasil login, silahkan menuju "; ?>
    <a href="homeAdmin.html">Halaman HOME</a>
<?php
} else if ($row['level'] == 2) { // Level 2 untuk guest
    echo "Anda berhasil login, silahkan menuju "; ?>
    <a href="homeGuest.html">Halaman HOME</a>
<?php
} else { // Gagal login (username/password salah)
    echo "Anda gagal login, silahkan "; ?>
    <a href="loginForm.html">Login kembali</a>
<?php
}
echo mysqli_error($connect);
?>