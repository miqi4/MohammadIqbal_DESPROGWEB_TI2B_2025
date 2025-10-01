<!DOCTYPE DOCTYPE html>
<html>
<head>
    <title>Array Asosiatif Dosen</title>
    <style>
        .info-table {
            border-collapse: collapse; 
            width: 25%; 
            margin-top: 20px;
        }
        .info-table th, .info-table td {
            border: 2px solid #000000ff;
            padding: 12px;
            text-align: left;
        }
    </style>
</head>
<body>
<?php
$Dosen = [
    'Nama' => 'Elok Nur Hamdana',
    'Domisili' => 'Malang',
    'Jenis Kelamin' => 'Perempuan'
];
echo "<h2>Informasi Dosen</h2>";
echo "<table class='info-table'>";
foreach ($Dosen as $key => $value) {
    echo "<tr>";
    echo "<th>" . $key . "</th>";
    echo "<td>" . $value . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>