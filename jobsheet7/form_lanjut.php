<!DOCTYPE DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body><h2>Form Contoh</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBuah = $_POST['buah'];
    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna']; 
    } else {$selectedWarna = []; }
    $selectedJenisKelamin = $_POST['jenis_kelamin'];
    echo "<h3>Hasil Input:</h3>";
    echo "Anda memilih buah: <b>" . htmlspecialchars($selectedBuah) . "</b><br>";
    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: <b>" . htmlspecialchars(implode(", ", $selectedWarna)) . "</b><br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }
    echo "Jenis kelamin Anda: <b>" . htmlspecialchars($selectedJenisKelamin) . "</b><br>";
    echo "<hr>";
}
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        
        <br><br>
        
        <label>Pilih Warna Favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        
        <br>
        
        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
        
        <br>
        
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>