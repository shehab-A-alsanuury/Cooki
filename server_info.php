<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Server Information</title>
</head>
<body>
<h1>Server Information</h1>
<p><strong>Server IP Address:</strong> <?php echo $_SERVER['SERVER_ADDR']; ?></p>
<p><strong>Script Name:</strong> <?php echo $_SERVER['SCRIPT_NAME']; ?></p>
<p><strong>User Agent:</strong> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
<p><strong>Request Method:</strong> <?php echo $_SERVER['REQUEST_METHOD']; ?></p>
<p><strong>Client IP Address:</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
</body>
</html>
