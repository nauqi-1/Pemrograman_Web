<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('Location: loginForm.html');
    exit;
}

$query = "SELECT * FROM missing_person_data";
$result = mysqli_query($connect, $query);

$reports = [];

while ($row = mysqli_fetch_assoc($result)) {
    $reports[] = $row;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Halo, <?php echo $_SESSION['username']; ?>. Selamat datang.</h1>
    <p><a href="logout.php">Logout</a></p>
    <h2>Submit a Missing Person Report</h2>
    <form method="post" action="fungsi/create_data.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="location">Location Last Seen:</label>
        <input type="text" id="location" name="location" required><br><br>
        <label for="date">Date Last Seen:</label>
        <input type="date" id="date" name="date" required><br><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>
        <input type="submit" value="Submit Report">
    </form>
    <h2>Existing Reports</h2>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Last Known Location</th>
            <th>Date</th>
            <th>Description</th>
            <th>Submitter</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($reports as $report): ?>
            <tr>
                <td><?php echo $report['name']; ?></td>
                <td><?php echo $report['location']; ?></td>
                <td><?php echo $report['date']; ?></td>
                <td><?php echo $report['description']; ?></td>
                <td><?php echo $report['fk_username']; ?></td>
                <td>
                    <?php if ($_SESSION['username'] === $report['fk_username']): ?>
                        <a href="fungsi/update_data.php?id=<?php echo $report['id']; ?>">Edit</a>
                        <a href="fungsi/delete_data.php?id=<?php echo $report['id']; ?>">Delete</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>