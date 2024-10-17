<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['answers'] = $_POST;
    header("Location: summary.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
</head>
<body>
<h1>Simple Survey</h1>
<form method="POST">
    <fieldset>
        <legend>What is your favorite color?</legend>
        <label><input type="radio" name="color" value="Red" required> Red</label><br>
        <label><input type="radio" name="color" value="Blue"> Blue</label><br>
        <label><input type="radio" name="color" value="Green"> Green</label><br>
        <label><input type="radio" name="color" value="Yellow"> Yellow</label><br>
    </fieldset>

    <fieldset>
        <legend>What is your favorite animal?</legend>
        <label><input type="radio" name="animal" value="Dog" required> Dog</label><br>
        <label><input type="radio" name="animal" value="Cat"> Cat</label><br>
        <label><input type="radio" name="animal" value="Bird"> Bird</label><br>
        <label><input type="radio" name="animal" value="Fish"> Fish</label><br>
    </fieldset>

    <button type="submit">Submit Survey</button>
</form>
</body>
</html>
