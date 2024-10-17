<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $_SESSION['theme'] = $_POST['theme'];
    $_SESSION['language'] = $_POST['language'];
    header('Location: preferences.php'); 
    exit();
}


$theme = isset($_SESSION['theme']) ? $_SESSION['theme'] : 'light';
$language = isset($_SESSION['language']) ? $_SESSION['language'] : 'english';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preferences</title>
    <style>
        body {
            background-color: <?php echo $theme === 'dark' ? '#333' : '#FFF'; ?>;
            color: <?php echo $theme === 'dark' ? '#FFF' : '#000'; ?>;
        }
    </style>
</head>
<body>

<h1>User Preferences</h1>

<form method="POST">
    <label for="theme">Select Theme:</label>
    <select name="theme" id="theme" required>
        <option value="light" <?php echo $theme === 'light' ? 'selected' : ''; ?>>Light</option>
        <option value="dark" <?php echo $theme === 'dark' ? 'selected' : ''; ?>>Dark</option>
    </select>
    
    <br><br>

    <label for="language">Select Language:</label>
    <select name="language" id="language" required>
        <option value="english" <?php echo $language === 'english' ? 'selected' : ''; ?>>English</option>
        <option value="arabic" <?php echo $language === 'arabic' ? 'selected' : ''; ?>>Arabic</option>
    </select>
    
    <br><br>

    <button type="submit">Save Preferences</button>
</form>

<h2>Your Preferences:</h2>
<p>Theme: <strong><?php echo htmlspecialchars($theme); ?></strong></p>
<p>Language: <strong><?php echo htmlspecialchars($language); ?></strong></p>

</body>
</html>
