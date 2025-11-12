<?php
// Menghapus cookies dengan mengatur waktu kadaluarsa di masa lalu
setcookie("user", "", time() - 3600);
echo "Cookies 'user' berhasil dihapus.";
?>