<?php
if (isset($_POST['language'])) {
    setcookie('language', $_POST['language'], time() + (86400 * 30), "/"); 
}
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'Not set';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Preferences</title>
</head>
<body>
<h1>Select Your Preferred Language</h1>
<form method="POST" action="">
    <select name="language">
        <option value="English">English</option>
        <option value="Arabic">Arabic</option>
    </select>
    <button type="submit">Save Preference</button>
</form>
<p>Your selected language: <?php echo $language; ?></p>
</body>
</html>
