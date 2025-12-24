<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = pg_escape_string($db1, $_POST['id']);
$query = "SELECT * FROM anggota WHERE id='$id' ORDER BY id DESC";
$result = pg_query($db1, $query);
while ($row = pg_fetch_assoc($result)) {
  $h['id'] = $row["id"];
  $h['nama'] = $row["nama"];
  $h['jenis_kelamin'] = $row["jenis_kelamin"];
  $h['alamat'] = $row["alamat"];
  $h['no_telp'] = $row["no_telp"];
}
echo json_encode($h);

pg_close($db1);