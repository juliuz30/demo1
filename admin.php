<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

echo "<h1>Welcome, Admin " . $_SESSION['username'] . "!</h1>";
echo "<p>Admin Dashboard</p>";
echo "<a href='logout.php'>Logout</a>";
?>
