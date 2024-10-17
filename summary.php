<?php
session_start();


if (!isset($_SESSION['answers'])) {
    header("Location: survey.php"); 
    exit();
}

$answers = $_SESSION['answers'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Summary</title>
</head>
<body>
<h1>Survey Summary</h1>
<p><strong>Your favorite color:</strong> <?php echo htmlspecialchars($answers['color']); ?></p>
<p><strong>Your favorite animal:</strong> <?php echo htmlspecialchars($answers['animal']); ?></p>

<a href="survey.php">Take the survey again</a>
</body>
</html>
