<?php // /admin/manage_doctors.php
include '../config.php';
$query = "SELECT * FROM doctors";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
    echo "<p>{$row['name']} - {$row['specialty']} ({$row['city']})</p>";
}
?>
