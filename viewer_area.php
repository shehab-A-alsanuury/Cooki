<?php
session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'viewer') {
    echo "<h1>Access Denied</h1>";
    exit();
}

echo "<h1>Viewer Area</h1>";
echo "<p>Welcome, Viewer! You have access to this area.</p>";
?>

<a href="dashboard.php">Back to Dashboard</a>
