<html>
<head>
    <title>Keranjang Belanja</title>
</head>
<body>
    <h2>Keranjang Belanja</h2>
    <?php
    // Inisialisasi variabel
    $novel = 0;
    $buku = 0;
    // Ambil nilai cookies jika ada
    if (isset($_COOKIE['beliNovel'])) {
        $novel = $_COOKIE['beliNovel'];
    }
    if (isset($_COOKIE['beliBuku'])) {
        $buku = $_COOKIE['beliBuku'];
    }
    
    echo "Jumlah Novel: " . $novel . "<br>";
    echo "Jumlah Buku Teks: " . $buku . "<br>";
    ?>
</body>
</html>