<?php
session_start();

include("koneksi.php");

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: loginForm.html');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    $cek = mysqli_fetch_assoc($result);

    if ($cek) {
        $_SESSION['username'] = $username;
        header('Location: home.php');
        exit;
    } else {
        $error = "Maaf, username atau password salah.";
        echo "<script>alert('$error'); window.location.href = 'loginForm.html';</script>";
        exit;
    }
}
?>
