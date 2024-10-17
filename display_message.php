<?php
session_start();


function getFlashMessage() {
    if (isset($_SESSION['flash_message'])) {
        $flashMessage = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        return $flashMessage;
    }
    return null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Flash Message</title>
    <style>
        .flash-message {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .success { background-color: #d4edda; color: #155724; }
        .error { background-color: #f8d7da; color: #721c24; }
    </style>
</head>
<body>
    <h1>Display Flash Message</h1>

    <?php
    
    $flashMessage = getFlashMessage();
    if ($flashMessage) {
        echo "<div class='flash-message {$flashMessage['type']}'>{$flashMessage['message']}</div>";
    }
    ?>

    <a href="form_handler.php">Go back to the form</a>
</body>
</html>
