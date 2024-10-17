<?php
session_start();


if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
       
        $name = htmlspecialchars($_POST['name']);
        echo "Form submitted successfully. Hello, $name!";
    } else {
        echo "Invalid CSRF token. Form submission rejected.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Form Submission with CSRF Token</title>
</head>
<body>
    <h1>Secure Form</h1>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
