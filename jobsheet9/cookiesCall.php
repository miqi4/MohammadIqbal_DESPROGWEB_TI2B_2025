<?php
if (isset($_COOKIE['user'])) {
    echo "Nilai cookies 'user' adalah: " . $_COOKIE['user'];
} else {
    echo "Cookies 'user' belum diset atau sudah kadaluarsa.";
}
?>