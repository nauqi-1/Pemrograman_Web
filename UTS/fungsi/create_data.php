<?php
session_start();

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

include("../koneksi.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $username = $_SESSION['username'];

    $query = "INSERT INTO missing_person_data (name, location, date, description, fk_username) VALUES ('$name', '$location', '$date', '$description', '$username')";

    if (mysqli_query($connect, $query)) {
        header('Location: ../home.php');
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connect);
    }
}

mysqli_close($connect);
?>
