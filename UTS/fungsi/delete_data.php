<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('Location: loginForm.html');
    exit;
}

if (isset($_GET['id']) && !empty($_GET['id'])) {

    $id = $_GET['id'];
    $username = $_SESSION['username'];

    $query = "DELETE FROM missing_person_data WHERE id = '$id' AND fk_username = '$username'";
    
    if (mysqli_query($connect, $query)) {
        header('Location: home.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($connect);
    }
} else {
    header('Location: home.php');
    exit;
}
?>
