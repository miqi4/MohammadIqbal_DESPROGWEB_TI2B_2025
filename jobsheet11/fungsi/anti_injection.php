<?php
function antiinjection($koneksi, $data) {
    $filter = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
    return $filter;
}