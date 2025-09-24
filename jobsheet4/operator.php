<?php


$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan: {$a} + {$b} = {$hasilTambah} <br>";
echo "Hasil Pengurangan: {$a} - {$b} = {$hasilKurang} <br>";
echo "Hasil Perkalian: {$a} * {$b} = {$hasilKali} <br>";
echo "Hasil Pembagian: {$a} / {$b} = {$hasilBagi} <br>";
echo "Sisa Bagi: {$a} % {$b} = {$sisaBagi} <br>";
echo "Hasil Pangkat: {$a} ** {$b} = {$pangkat} <br>";
echo "<br>";
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah {$a} sama dengan {$b}? " . ($hasilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah {$a} tidak sama dengan {$b}? " . ($hasilTidakSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah {$a} lebih kecil dari {$b}? " . ($hasilLebihKecil ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah {$a} lebih besar dari {$b}? " . ($hasilLebihBesar ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah {$a} lebih kecil atau sama dengan {$b}? " . ($hasilLebihKecilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah {$a} lebih besar atau sama dengan {$b}? " . ($hasilLebihBesarSama ? 'Ya' : 'Tidak') . "<br>";
echo "<br>";
$a = true;
$b = false;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Operator AND: {$a} && {$b} = " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Operator OR: {$a} || {$b} = " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Operator NOT A: !{$a} = " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Operator NOT B: !{$b} = " . ($hasilNotB ? 'true' : 'false') . "<br>";
echo "<br>";

$a = 10;
$b = 5;

echo "Nilai awal a: {$a} <br>";
echo "Nilai awal b: {$b} <br><br>";

$a += $b;
echo "Hasil \$a += \$b adalah " . $a . "<br>";

$a = 10; 
$a -= $b;
echo "Hasil \$a -= \$b adalah " . $a . "<br>";

$a = 10;
$a *= $b;
echo "Hasil \$a *= \$b adalah " . $a . "<br>";

$a = 10;
$a /= $b;
echo "Hasil \$a /= \$b adalah " . $a . "<br>";

$a = 10;
$a %= $b;
echo "Hasil \$a %= \$b adalah " . $a . "<br>";

$a = 10;
$b = "10";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Nilai \$a: {$a} (integer) <br>";
echo "Nilai \$b: {$b} (string) <br><br>";

echo "Apakah \$a identik dengan \$b? (\$a === \$b) <br>";
echo "Hasil: " . ($hasilIdentik ? 'true' : 'false') . "<br><br>";

echo "Apakah \$a tidak identik dengan \$b? (\$a !== \$b) <br>";
echo "Hasil: " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";


$jumlahKursi = 45;
$kursiDitempati = 28;

$kursiKosong = $jumlahKursi - $kursiDitempati;
$persenKursiKosong = ($kursiKosong / $jumlahKursi) * 100;

echo "Jumlah kursi di restoran: " . $jumlahKursi . " kursi<br>";
echo "Kursi yang sudah ditempati: " . $kursiDitempati . " kursi<br>";
echo "Kursi yang masih kosong: " . $kursiKosong . " kursi<br>";
echo "Persentase kursi kosong: " . number_format($persenKursiKosong, 2) . "%<br>";

?>