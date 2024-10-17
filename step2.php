<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Save address and phone in the session
    $_SESSION['form_data']['address'] = $_POST['address'];
    $_SESSION['form_data']['phone'] = $_POST['phone'];

    
    header('Location: final_step.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 2 - Additional Details</title>
</head>
<body>
    <h1>Step 2: Additional Details</h1>
    <form method="POST" action="">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>
        <br>
        <button type="submit">Next</button>
    </form>
</body>
</html>
