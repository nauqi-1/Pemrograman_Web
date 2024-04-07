<?php
define('HOST', 'localhost');
define('USER', 'phpmyadmin');
define('PASS', 'phpmyadmin');
define('DB1', 'prakwebdb');
$db1 = new mysqli(HOST, USER, PASS, DB1);
if ($db1->connect_error) {
    die("Koneksi database gagal: " . $db1->connect_error);
}
?>