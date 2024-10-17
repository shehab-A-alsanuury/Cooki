<?php
session_start();


if (!isset($_SESSION['loggedin'])) {
    header('Location: access_control.php');
    exit();
}


echo "<h1>Welcome to the Dashboard!</h1>";
echo "<p>Your role is: <strong>" . htmlspecialchars($_SESSION['role']) . "</strong></p>";
?>

<a href="admin_area.php">Go to Admin Area</a><br>
<a href="editor_area.php">Go to Editor Area</a><br>
<a href="viewer_area.php">Go to Viewer Area</a><br>
<a href="logout.php">Logout</a>
