<?php

if (!isset($_COOKIE['favoriteFruit'])) {
    setcookie('favoriteFruit', 'Apple', time() + (86400 * 30), "/"); 
}


if (isset($_POST['delete_cookie'])) {
    
    setcookie('favoriteFruit', '', time() - 3600, "/"); 
    $message = "The cookie has been deleted.";
} else {
    $message = ""; 
}


$fruitValue = isset($_COOKIE['favoriteFruit']) ? $_COOKIE['favoriteFruit'] : "No favorite fruit set.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Cookie Example</title>
</head>
<body>

<h1>Favorite Fruit Cookie</h1>
<p>Favorite Fruit: <?php echo htmlspecialchars($fruitValue); ?></p>

<?php if ($message): ?>
    <p style="color: red;"><?php echo htmlspecialchars($message); ?></p>
<?php endif; ?>

<form method="POST">
    <button type="submit" name="delete_cookie">Delete Cookie</button>
</form>

</body>
</html>
