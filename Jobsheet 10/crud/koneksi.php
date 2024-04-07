<?php
$host = "localhost";
$username = "phpmyadmin";
$password = "phpmyadmin";
$database = "prakwebdb";

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>