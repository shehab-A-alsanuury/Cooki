<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


$currentScore = 0;
$message = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $score = 0;
    $answers = ["C", "B", "C"]; 
    foreach ($answers as $index => $correct) {
        if (isset($_POST["q$index"]) && $_POST["q$index"] === $correct) {
            $score++;
        }
    }
    
    
    $currentScore = (isset($_COOKIE['quizScore']) ? (int)$_COOKIE['quizScore'] : 0) + $score;
    
 
    setcookie('quizScore', $currentScore, time() + (86400 * 30), "/");
    
    $message = "Your score for this attempt: $score. Total score updated to $currentScore!";
}


$currentScore = isset($_COOKIE['quizScore']) ? (int)$_COOKIE['quizScore'] : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz with Cookies - Simplified</title>
</head>
<body>
<h1>Math Quiz</h1>
<p>Your total score: <?php echo htmlspecialchars($currentScore); ?></p>
<?php if ($message): ?>
    <p><?php echo htmlspecialchars($message); ?></p>
<?php endif; ?>

<form method="POST">
    <fieldset>
        <legend>What is 2 + 2?</legend>
        <label><input type="radio" name="q0" value="A" required> 2</label><br>
        <label><input type="radio" name="q0" value="B"> 3</label><br>
        <label><input type="radio" name="q0" value="C"> 4</label><br>
        <label><input type="radio" name="q0" value="D"> 5</label><br>
    </fieldset>

    <fieldset>
        <legend>What is 3 - 1?</legend>
        <label><input type="radio" name="q1" value="A" required> 1</label><br>
        <label><input type="radio" name="q1" value="B"> 2</label><br>
        <label><input type="radio" name="q1" value="C"> 3</label><br>
        <label><input type="radio" name="q1" value="D"> 0</label><br>
    </fieldset>

    <fieldset>
        <legend>What is 5 - 2?</legend>
        <label><input type="radio" name="q2" value="A" required> 2</label><br>
        <label><input type="radio" name="q2" value="B"> 4</label><br>
        <label><input type="radio" name="q2" value="C"> 3</label><br>
        <label><input type="radio" name="q2" value="D"> 1</label><br>
    </fieldset>

    <button type="submit">Submit Quiz</button>
</form>

</body>
</html>