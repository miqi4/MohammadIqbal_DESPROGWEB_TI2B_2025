<?php
$time = time();
setcookie("user", "Polinema", $time + 3600); // Cookies aktif 1 jam
?>
<html>
<body>
    Cookies 'user' sudah dibuat.
</body>
</html>