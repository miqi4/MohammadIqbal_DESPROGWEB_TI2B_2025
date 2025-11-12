<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']); 
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $sql);
$cek = mysqli_num_rows($result);
if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    echo "Anda Berhasil Login! silahkan menuju "; ?>
    <a href="homeSession.php">Halaman Home</a>
<?php
} else {
    // Jika login gagal
    echo "Gagal Login! silahkan "; ?>
    <a href="sessionLoginForm.html">Login kembali</a>
<?php
}
echo mysqli_error($connect);
?>