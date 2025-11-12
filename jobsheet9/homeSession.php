<?php
// Memulai session untuk mengakses data $_SESSION
session_start();
?>
<html>
<head>
    <title>Halaman Home</title>
</head>
<body>
    <h2>Halaman Home</h2>
    <?php
    // Cek apakah session username sudah diset (user sudah login)
    if (isset($_SESSION['username'])) {
        // Jika sudah login, tampilkan sambutan dan tautan logout
        echo "Hello, " . $_SESSION['username'] . "! Selamat datang di halaman HOME.<br>";
        echo "Klik "; ?>
        <a href="sessionLogout.php">Log Out</a>
        <?php echo " untuk keluar.";
    } else {
        // Jika belum login, tampilkan pesan error dan tautan login
        echo "Anda belum login. Silahkan "; ?>
        <a href="sessionLoginForm.html">Log In</a>
        <?php echo " terlebih dahulu.";
    }
    ?>
</body>
</html>