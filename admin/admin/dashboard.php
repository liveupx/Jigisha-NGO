<?php // /admin/dashboard.php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
echo "<h2>Admin Dashboard</h2>";
echo "<a href='manage_doctors.php'>Manage Doctors</a><br>";
echo "<a href='manage_users.php'>Manage Users</a><br>";
echo "<a href='manage_slots.php'>Manage Slots</a><br>";
echo "<a href='logout.php'>Logout</a>";
?>
