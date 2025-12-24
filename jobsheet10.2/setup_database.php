<?php
// Database setup script for PostgreSQL
echo "<h2>Database Setup for lab_ba</h2>";

$db_config = [
    'host' => 'localhost',
    'port' => '5432',
    'user' => 'postgres',
    'password' => '12345678',
];

// First, connect to PostgreSQL without specifying a database to create the database
$conn_string = "host={$db_config['host']} port={$db_config['port']} user={$db_config['user']} password={$db_config['password']}";
$conn = pg_connect($conn_string);

if (!$conn) {
    die("<div style='color: red;'>Failed to connect to PostgreSQL: " . pg_last_error() . "</div>");
}

echo "<p style='color: green;'>✓ Connected to PostgreSQL server</p>";

// Check if database exists, if not create it
$db_exists = pg_query($conn, "SELECT 1 FROM pg_database WHERE datname = 'lab_ba'");
if (pg_num_rows($db_exists) == 0) {
    $create_db = pg_query($conn, "CREATE DATABASE lab_ba");
    if ($create_db) {
        echo "<p style='color: green;'>✓ Database 'lab_ba' created successfully</p>";
    } else {
        echo "<p style='color: red;'>✗ Failed to create database: " . pg_last_error($conn) . "</p>";
    }
} else {
    echo "<p style='color: blue;'>ℹ Database 'lab_ba' already exists</p>";
}

pg_close($conn);

// Now connect to the lab_ba database
$conn_string = "host={$db_config['host']} port={$db_config['port']} dbname=lab_ba user={$db_config['user']} password={$db_config['password']}";
$conn = pg_connect($conn_string);

if (!$conn) {
    die("<div style='color: red;'>Failed to connect to lab_ba database: " . pg_last_error() . "</div>");
}

echo "<p style='color: green;'>✓ Connected to lab_ba database</p>";

// Create anggota table
$create_table_sql = "
CREATE TABLE IF NOT EXISTS anggota (
    id SERIAL PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    jenis_kelamin CHAR(1) NOT NULL CHECK (jenis_kelamin IN ('L', 'P')),
    alamat TEXT NOT NULL,
    no_telp VARCHAR(20) NOT NULL
)";

$create_table = pg_query($conn, $create_table_sql);
if ($create_table) {
    echo "<p style='color: green;'>✓ Table 'anggota' created successfully</p>";
} else {
    echo "<p style='color: red;'>✗ Failed to create table: " . pg_last_error($conn) . "</p>";
}

// Insert sample data
$sample_data = [
    ['John Doe', 'L', 'Jl. Merdeka No. 1', '081234567890'],
    ['Jane Smith', 'P', 'Jl. Sudirman No. 2', '081234567891'],
    ['Ahmad Rahman', 'L', 'Jl. Thamrin No. 3', '081234567892']
];

foreach ($sample_data as $data) {
    $nama = pg_escape_string($conn, $data[0]);
    $jenis_kelamin = pg_escape_string($conn, $data[1]);
    $alamat = pg_escape_string($conn, $data[2]);
    $no_telp = pg_escape_string($conn, $data[3]);
    
    $insert_sql = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";
    $insert = pg_query($conn, $insert_sql);
    
    if ($insert) {
        echo "<p style='color: green;'>✓ Sample data inserted: {$data[0]}</p>";
    } else {
        echo "<p style='color: orange;'>⚠ Sample data might already exist: {$data[0]}</p>";
    }
}

pg_close($conn);

echo "<h3 style='color: green;'>Database setup completed!</h3>";
echo "<p><a href='index.php' style='background: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Go to Application</a></p>";
?>