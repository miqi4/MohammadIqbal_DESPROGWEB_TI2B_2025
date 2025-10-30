<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"] ?? '';
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? ''; // <-- Ambil data password
    $errors = array();
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } 
    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    } elseif (strlen($password) < 8) { // <-- Pengecekan Panjang Server
        $errors[] = "Password minimal 8 karakter.";
    }
    if (empty($errors)) {
        // Jika semua validasi sukses
        echo "<span style='color: green; font-weight: bold;'>Registrasi Berhasil! Data Anda aman.</span>";
        // Di sini seharusnya ada proses penyimpanan ke database
    } else {
        // Jika ada kesalahan validasi dari server
        echo "<div style='color: red; font-weight: bold;'>Kesalahan Validasi:</div>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul>";
    }
} else {
    echo "Akses tidak valid.";
}
?>