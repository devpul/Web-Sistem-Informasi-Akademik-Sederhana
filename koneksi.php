<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'db_akademik_ibnu');

    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
    or die ("Koneksi Gagal");

?>