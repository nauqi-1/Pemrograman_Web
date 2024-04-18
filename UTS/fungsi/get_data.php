<?php
session_start();

include("koneksi.php");

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$query = "SELECT * FROM reports";
$result = mysqli_query($connect, $query);

$reports = [];

while ($row = mysqli_fetch_assoc($result)) {
    $reports[] = $row;
}

include("home.php");
?>