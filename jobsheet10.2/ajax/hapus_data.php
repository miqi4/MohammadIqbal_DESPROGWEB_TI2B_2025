<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = pg_escape_string($db1, $_POST['id']);

$query = "DELETE FROM anggota WHERE id='$id'";
pg_query($db1, $query);

echo json_encode(['success' => 'Sukses']);

pg_close($db1);