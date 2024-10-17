<?php
$name = isset($_REQUEST['name']) ? htmlspecialchars($_REQUEST['name']) : '';
$message = isset($_REQUEST['message']) ? htmlspecialchars($_REQUEST['message']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <br>
    <label for="message">Message:</label>
    <textarea name="message" required></textarea>
    <br>
    <button type="submit">Send</button>
</form>

<?php if ($name && $message): ?>
    <h2>Your Message</h2>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Message:</strong> <?php echo $message; ?></p>
<?php endif; ?>
</body>
</html>
