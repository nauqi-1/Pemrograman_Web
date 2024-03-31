<?php
// fungsi utk display error karena sy bingung kok g bisa bisa wkwkw
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost'; 
$username = 'phpmyadmin'; //ganti nama dewe
$password = 'phpmyadmin'; //ganti pw dewe
$database = 'prakwebdb'; 

$connect = mysqli_connect($host, $username, $password, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
