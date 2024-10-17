<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $_SESSION['form_data']['name'] = $_POST['name'];
    $_SESSION['form_data']['email'] = $_POST['email'];

    // Redirect to step 2
    header('Location: step2.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 1 - Basic Information</title>
</head>
<body>
    <h1>Step 1: Basic Information</h1>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Next</button>
    </form>
</body>
</html>
