<?php
session_start();

if (!isset($_SESSION['visit_time'])) {
    $_SESSION['visit_time'] = date("Y-m-d H:i:s");
}

$user_ip = $_SERVER['REMOTE_ADDR'];
$visit_time = $_SESSION['visit_time'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging User Activity with Session and Server</title>
</head>
<body>
    <h1>User Activity Log</h1>
    <p>Visit Time: <?php echo $visit_time; ?></p>
    <p>Your IP Address: <?php echo $user_ip; ?></p>
</body>
</html>
