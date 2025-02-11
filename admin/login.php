<?php // /admin/login.php
session_start();
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);
    if ($result->num_rows == 1) {
        $_SESSION['admin'] = $username;
        header('Location: dashboard.php');
    } else {
        echo "Invalid Credentials!";
    }
}
?>
<form method='POST'>
    <input type='text' name='username' placeholder='Username' required>
    <input type='password' name='password' placeholder='Password' required>
    <button type='submit'>Login</button>
</form>
