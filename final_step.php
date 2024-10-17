<?php
session_start();


$formData = isset($_SESSION['form_data']) ? $_SESSION['form_data'] : [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    unset($_SESSION['form_data']); 

    echo "<h1>Thank you for submitting the form!</h1>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Step - Review Your Information</title>
</head>
<body>
    <h1>Review Your Information</h1>

    <?php if (!empty($formData)): ?>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($formData['name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($formData['email']); ?></p>
        <p><strong>Address:</strong> <?php echo htmlspecialchars($formData['address']); ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($formData['phone']); ?></p>

        <form method="POST" action="">
            <button type="submit">Submit</button>
        </form>
    <?php else: ?>
        <p>No information found.</p>
    <?php endif; ?>
</body>
</html>
