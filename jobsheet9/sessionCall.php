<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "Nama user: " . $_SESSION['user'] . "<br>";
    echo "Status: " . $_SESSION['status'];
} else {
    echo "Session belum diset.";
}
?>