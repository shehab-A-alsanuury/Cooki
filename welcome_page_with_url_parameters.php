<?php
if (isset($_GET['first_name']) && isset($_GET['last_name'])) {
    $first_name = htmlspecialchars($_GET['first_name']);
    $last_name = htmlspecialchars($_GET['last_name']);
} else {
    header("Location: redirect_with_url_parameters.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page with URL Parameters</title>
</head>
<body>
    <h1>Welcome, <?php echo "$first_name $last_name"; ?>!</h1>
    <p>Thank you for submitting your details.</p>
</body>
</html>
