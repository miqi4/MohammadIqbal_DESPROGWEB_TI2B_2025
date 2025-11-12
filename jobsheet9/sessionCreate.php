<?php
session_start();
$_SESSION['user'] = "Polinema";
$_SESSION['status'] = "login";
echo "Session user dan status sudah diset.";
?>