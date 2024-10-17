<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = !empty($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : 'First name is required';
    $lastName = !empty($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : 'Last name is required';
    $email = !empty($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Email is required';
    
    echo "First Name: $firstName<br>";
    echo "Last Name: $lastName<br>";
    echo "Email: $email<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Handling</title>
</head>
<body>
<form method="POST" action="">
    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" required>
    <br>
    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>
