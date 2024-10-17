<?php
session_start();


function setFlashMessage($type, $message) {
    $_SESSION['flash_message'] = [
        'type' => $type,
        'message' => $message
    ];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $success = rand(0, 1); 

    if ($success) {
        setFlashMessage('success', 'Form submitted successfully!');
    } else {
        setFlashMessage('error', 'An error occurred during form processing.');
    }

    
    header('Location: display_message.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Messages Form</title>
</head>
<body>
    <h1>Flash Messages Form</h1>
    <form method="post">
        <button type="submit">Submit Form</button>
    </form>
</body>
</html>
