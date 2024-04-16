<?php
date_default_timezone_set("Asia/Jakarta");
$koneksi = mysqli_connect("localhost","phpmyadmin","phpmyadmin", "prakwebdb11");
if (mysqli_connect_errno()) {
    die("koneksi database gagal: ". mysqli_connect_error());
}    
?>