<?php
session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    echo "<h1>Access Denied</h1>";
    exit();
}

echo "<h1>Admin Area</h1>";
echo "<p>Welcome, Admin! You have access to this area.</p>";
?>

<a href="dashboard.php">Back to Dashboard</a>
