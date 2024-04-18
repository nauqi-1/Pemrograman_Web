<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('Location: loginForm.html');
    exit;
}

$id = $_GET['id'];

$query = "SELECT * FROM missing_person_data WHERE id = '$id'";
$result = mysqli_query($connect, $query);
$report = mysqli_fetch_assoc($result);

if (!$report) {
    echo "Report not found.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    
    $query = "UPDATE missing_person_data SET name = '$name', location = '$location', date = '$date', description = '$description' WHERE id = '$id'";

    if (mysqli_query($connect, $query)) {
        header('Location: home.php');
        exit;
    } else {
        echo "Failed to update report: " . mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Report</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Report</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($report['name']); ?>" required><br><br>
        <label for="location">Location Last Seen:</label>
        <input type="text" id="location" name="location" value="<?php echo htmlspecialchars($report['location']); ?>" required><br><br>
        <label for="date">Date Last Seen:</label>
        <input type="date" id="date" name="date" value="<?php echo htmlspecialchars($report['date']); ?>" required><br><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required><?php echo htmlspecialchars($report['description']); ?></textarea><br><br>
        <input type="submit" value="Save Changes">
    </form>
</body>
</html>
