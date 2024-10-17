<?php

session_start();


if (isset($_COOKIE['sharedMessage'])) {
    $message = $_COOKIE['sharedMessage'];
} else {
    $message = "No message found in the cookie.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>

<h1>Welcome to Page 2</h1>
<p>Cookie Value: <?php echo htmlspecialchars($message); ?></p>

</body>
</html>
