<?php

$bgColor = isset($_COOKIE['bgColor']) ? $_COOKIE['bgColor'] : 'white';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $bgColor = $_POST['color'];
    setcookie('bgColor', $bgColor, time() + (86400 * 30), "/");
  
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preference - Background Color</title>
    <style>
        body {
            background-color: <?php echo htmlspecialchars($bgColor); ?>; /* Apply the selected background color */
            color: black;
            font-family: Arial, sans-serif;
        }
        form {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>Select Your Preferred Background Color</h1>
<form method="POST">
    <label for="color">Choose a color:</label>
    <select name="color" id="color">
        <option value="red" <?php if ($bgColor == 'red') echo 'selected'; ?>>Red</option>
        <option value="blue" <?php if ($bgColor == 'blue') echo 'selected'; ?>>Blue</option>
        <option value="green" <?php if ($bgColor == 'green') echo 'selected'; ?>>Green</option>
        <option value="yellow" <?php if ($bgColor == 'yellow') echo 'selected'; ?>>Yellow</option>
        <option value="orange" <?php if ($bgColor == 'orange') echo 'selected'; ?>>Orange</option>
    </select>
    <input type="submit" value="Save Preference">
</form>

</body>
</html>
