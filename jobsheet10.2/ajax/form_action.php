<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = stripslashes(strip_tags(htmlspecialchars($_POST['id'], ENT_QUOTES)));
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

// Escape strings for PostgreSQL
$nama = pg_escape_string($db1, $nama);
$jenis_kelamin = pg_escape_string($db1, $jenis_kelamin);
$alamat = pg_escape_string($db1, $alamat);
$no_telp = pg_escape_string($db1, $no_telp);

if ($id == "") {
  $query = "INSERT into anggota (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";
  pg_query($db1, $query);
} else {
  $id = pg_escape_string($db1, $id);
  $query = "UPDATE anggota SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' WHERE id='$id'";
  pg_query($db1, $query);
}
echo json_encode(['success' => 'Sukses']);

pg_close($db1);