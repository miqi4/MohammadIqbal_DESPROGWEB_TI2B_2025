<?php
$db = [
    'driver' => 'pgsql',
    'host' => 'localhost',
    'port' => '5432',
    'dbname' => 'prakwebdb', // nama database yang harus dibuat (WAJIB)
    'user' => 'postgres', // ganti bila berbeda
    'password' => '12345678', // ganti bila berbeda
];

// Buat Koneksinya
$db1 = pg_connect("host={$db['host']} port={$db['port']} dbname={$db['dbname']} user={$db['user']} password={$db['password']}");