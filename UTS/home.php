<?php
session_start();
require 'koneksi.php';

include ("fungsi/read_data.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("name", $_POST["name"], time() + (5 * 60), "/");
    setcookie("gender", $_POST["gender"], time() + (5 * 60), "/");
    setcookie("description", $_POST["description"], time() + (5 * 60), "/");
    setcookie("location", $_POST["location"], time() + (5 * 60), "/");
    setcookie("date", $_POST["date"], time() + (5 * 60), "/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/styleHome.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>.</h1>
    <p>Not <?php echo $_SESSION['username']; ?>? 
    <a href="logout.php" onclick="return confirm('Are you sure you want to logout?')">Logout</a>.
</p>
    <h2>Submit a Missing Person Report</h2>
    <form method="post" action="fungsi/create_data.php">
        
    <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="-" selected>---</option>
            <option value="Male" <?php if(isset($_COOKIE['gender']) && $_COOKIE['gender'] == 'Male') echo 'selected'; ?>>Male</option>
            <option value="Female" <?php if(isset($_COOKIE['gender']) && $_COOKIE['gender'] == 'Female') echo 'selected'; ?>>Female</option>
            <option value="Other" <?php if(isset($_COOKIE['gender']) && $_COOKIE['gender'] == 'Other') echo 'selected'; ?>>Other</option>
        </select><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>
        
        <label for="location">Last Known Location:</label>
        <input type="text" id="location" name="location" required><br><br>
       
        <label for="date">Last Seen Date:</label>
        <input type="date" id="date" name="date" required><br><br>
        
        <input type="submit" value="Submit Report">
    </form>
    <h2>Existing Reports</h2>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Description</th>
            <th>Last Known Location</th>
            <th>Last Seen Date</th>
            <th>Submitter</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($reports as $report): ?>
            <tr>
                <td><?php echo $report['name']; ?></td>
                <td><?php echo $report['gender']; ?></td>
                <td><?php echo $report['description']; ?></td>
                <td><?php echo $report['location']; ?></td>
                <td><?php echo $report['date']; ?></td>
                <td><?php echo $report['fk_username']; ?></td>
                <td>
                    <?php if ($_SESSION['username'] === $report['fk_username']): ?>
                        <a href="fungsi/update_data.php?id=<?php echo $report['id']; ?>">Edit</a>
                        <a href="fungsi/delete_data.php?id=<?php echo $report['id']; ?>" onclick="return confirm('Are you sure you want to delete this report?')">Delete</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>