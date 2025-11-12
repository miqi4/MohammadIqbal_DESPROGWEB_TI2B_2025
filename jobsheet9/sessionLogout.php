<?php

session_start();
session_destroy();
echo "Anda telah berhasil logout. Silahkan "; ?>
<a href="sessionLoginForm.html">Log In</a>
<?php echo " kembali.";
?>