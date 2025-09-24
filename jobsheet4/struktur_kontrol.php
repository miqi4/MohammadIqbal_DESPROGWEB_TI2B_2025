<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;
echo "Jarak saat ini: " . $jarakSaatIni . " km<br>";
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Jarak target: " . $jarakTarget . " km<br>";
echo "Peningkatan harian: " . $peningkatanHarian . " km<br>";
echo "<br>";

echo "Atlet tersebut memerlukan " . $hari . " hari untuk mencapai jarak 500 kilometer.";
echo "<br>";
echo "<br>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah Lahan: " . $jumlahLahan . "<br>";
echo "Tanaman per Lahan: " . $tanamanPerLahan . "<br>";
echo "Buah per Tanaman: " . $buahPerTanaman . "<br>";
echo "Total buah yang akan dipanen adalah: " . $jumlahBuah . "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Skor ujian: " . implode(", ", $skorUjian) . "<br>";
echo "Total skor ujian adalah: " . $totalSkor . "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: {$nilai} (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: {$nilai} (Lulus) <br><br>";
}

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
array_shift($nilaiSiswa);
array_shift($nilaiSiswa);
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);
$totalNilai = array_sum($nilaiSiswa);
$jumlahSiswa = count($nilaiSiswa);
$rataRata = $totalNilai / $jumlahSiswa;
echo "Daftar nilai awal: 85, 92, 78, 64, 90, 75, 88, 79, 70, 96 <br>";
echo "Nilai yang digunakan setelah mengabaikan 2 nilai terendah dan 2 nilai tertinggi: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Total nilai yang digunakan: " . $totalNilai . "<br>";
echo "Jumlah siswa yang dihitung: " . $jumlahSiswa . "<br>";
echo "Rata-rata nilai: " . number_format($rataRata, 2) . "<br><br>";

$hargaProduk = 120000;
$diskon = 0; 

if ($hargaProduk > 100000) {
    $diskon = 0.20; 
}

$jumlahDiskon = $hargaProduk * $diskon;
$hargaFinal = $hargaProduk - $jumlahDiskon;

echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Diskon: " . ($diskon * 100) . "%<br>";
echo "Jumlah diskon yang didapat: Rp " . number_format($jumlahDiskon, 0, ',', '.') . "<br>";
echo "Harga yang harus dibayar: Rp " . number_format($hargaFinal, 0, ',', '.') . "<br>";
echo "<br>";

$skorPemain = 650;
$batasPoinHadiah = 500;
$mendapatHadiah = "TIDAK";
if ($skorPemain > $batasPoinHadiah) {
    $mendapatHadiah = "YA";
}
echo "Total skor pemain adalah: " . $skorPemain . " poin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $mendapatHadiah . "<br>";

?>