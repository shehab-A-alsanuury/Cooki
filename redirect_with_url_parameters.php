<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    
  
    header("Location: welcome_page.php?first_name=$first_name&last_name=$last_name");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect with URL Parameters</title>
</head>
<body>
    <h1>Enter Your Details</h1>
    <form method="POST" action="">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required>
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
