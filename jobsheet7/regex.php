<?php
$pattern_L6 = '/[0-9]+/';
$text_L6 = 'There are 123 apples.';
if (preg_match($pattern_L6, $text_L6, $matches)) {
    echo "<p>Teks: '" . $text_L6 . "'</p>";
    echo "<b>Cocokkan:</b> " . $matches[0];
} else {
    echo "<p>Teks: '" . $text_L6 . "'</p>";
    echo "<b>Hasil: Tidak ada yang cocok!</b>";
}

$pattern_L10 = '/apple/';
$replacement_L10 = 'banana';
$text_L10 = 'I like apple pie.';
$new_text_L10 = preg_replace($pattern_L10, $replacement_L10, $text_L10);
echo "<p>Pola Dicari: <code>" . $pattern_L10 . "</code></p>";
echo "<p>Teks Asli: '" . $text_L10 . "'</p>";
echo "<p>Teks Pengganti: '" . $replacement_L10 . "'</p>";
echo "<b>Hasil Teks Baru:</b> " . $new_text_L10; 

$pattern_L14 = '/go*d/'; // Cocokkan "god", "good", "gooood", dll.
$text_L14 = 'god is good.';
if (preg_match($pattern_L14, $text_L14, $matches_L14)) {
    echo "<p>Teks Uji: '" . $text_L14 . "'</p>";
    echo "Cocokkan: <b>" . $matches_L14[0] . "</b>";
} else {
    echo "Tidak ada yang cocok!";
}
echo "<hr>";

$pattern_Q5_5 = '/go?d/'; // Ubah * menjadi ? (0 atau 1 kali)
$text_Q5_5 = 'god is good.'; 
if (preg_match($pattern_Q5_5, $text_Q5_5, $matches_Q5_5)) {
    echo "<p>Teks Uji: '" . $text_Q5_5 . "'</p>";
    echo "Cocokkan: <b>" . $matches_Q5_5[0] . "</b>";
} else {
    echo "Tidak ada yang cocok!";
}
echo "<hr>";


$pattern_Q5_6 = '/go{2,3}d/'; // Ubah * menjadi {2,3} (2 sampai 3 kali)
$text_Q5_6 = 'god is good. goood is better. goooood is too much.';
if (preg_match($pattern_Q5_6, $text_Q5_6, $matches_Q5_6)) {
    echo "<p>Teks Uji: '" . $text_Q5_6 . "'</p>";
    echo "Cocokkan: <b>" . $matches_Q5_6[0] . "</b>";
} else {
    echo "Tidak ada yang cocok!";
}
echo "<hr>";

?>
