<?php
session_start();

if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    if (!empty($_GET['jabatan'])) {
        $id = antiinjection($koneksi, $_GET['id']);
        $query = "DELETE FROM jabatan WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
        exit;
    }

    if (!empty($_GET['anggota'])) {
        $id = antiinjection($koneksi, $_GET['id']);

        // Hapus data anggota dulu (karena relasi user_id)
        $queryAnggota = "DELETE FROM anggota WHERE user_id = '$id'";
        $hapusAnggota = mysqli_query($koneksi, $queryAnggota);

        // Hapus data user
        $queryUser = "DELETE FROM user WHERE id = '$id'";
        $hapusUser = mysqli_query($koneksi, $queryUser);

        if ($hapusAnggota && $hapusUser) {
            pesan('success', "Anggota Telah Terhapus.");
        } elseif ($hapusUser && !$hapusAnggota) {
            pesan('warning', "Data Login Terhapus Tetapi Data Anggota Tidak Terhapus Karena: " . mysqli_error($koneksi));
        } else {
            pesan('danger', "Anggota Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }

        header("Location: ../index.php?page=anggota");
        exit;
    }
}
?>