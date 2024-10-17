<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location: secure_login.php");
    exit();
}


if ($_SESSION['user_ip'] !== $_SERVER['REMOTE_ADDR'] || $_SESSION['user_agent'] !== $_SERVER['HTTP_USER_AGENT']) {
    session_destroy(); 
    header("Location: secure_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome to the Home Page!</h1>
    <p>You have logged in successfully.</p>
    <a href="secure_logout.php">Logout</a>
</body>
</html>
