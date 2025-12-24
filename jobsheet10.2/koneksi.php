<?php
date_default_timezone_set("Asia/Jakarta");

$db = [
    'driver' => 'pgsql',
    'host' => 'localhost',
    'port' => '5432',
    'dbname' => 'prakwebdb', // nama database yang harus dibuat (WAJIB)
    'user' => 'postgres', // ganti bila berbeda
    'password' => '12345678', // ganti bila berbeda
];

$koneksi = pg_connect("host={$db['host']} port={$db['port']} dbname={$db['dbname']} user={$db['user']} password={$db['password']}");

if (!$koneksi) {
    die("Koneksi database gagal: " . pg_last_error());
}