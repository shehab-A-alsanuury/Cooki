<?php

setcookie("testCookie", "Hello, World!", time() + 60, "/"); 


if (isset($_COOKIE["testCookie"])) {
    $cookieValue = $_COOKIE["testCookie"];
} else {
    $cookieValue = "The cookie has expired or is not set.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Expiry Experiment</title>
</head>
<body>

<h1>Cookie Expiry Experiment</h1>
<p>Cookie Value: <?php echo htmlspecialchars($cookieValue); ?></p>
<p>The cookie will expire in 1 minute.</p>

</body>
</html>
