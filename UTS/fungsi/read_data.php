<?php
include ("./koneksi.php");

$query = "SELECT id, name, location, DATE_FORMAT(date, '%m/%d/%Y') as date, description, fk_username FROM missing_person_data";
$result = mysqli_query($connect, $query);

$reports = [];

while ($row = mysqli_fetch_assoc($result)) {
    $reports[] = $row;
}

mysqli_close($connect);

return $reports;
?>
