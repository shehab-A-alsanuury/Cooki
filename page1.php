<?php

setcookie('sharedMessage', 'Hello from Page 1', time() + (86400 * 30), "/"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>

<h1>Welcome to Page 1</h1>
<p>The cookie has been set. Now you can go to <a href="page2.php">Page 2</a> to see the cookie value.</p>

</body>
</html>
