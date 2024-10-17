
<?php

session_start(); 


$session_user_name = "user"; 
$session_email_name = "email"; 
$session_refresh_counter_name = "refresh_count"; 


if (isset($_SESSION[$session_refresh_counter_name])) {
    
    $refresh_count = $_SESSION[$session_refresh_counter_name] + 1;
} else {
   
    $refresh_count = 1;
}


$_SESSION[$session_refresh_counter_name] = $refresh_count;


if (isset($_SESSION[$session_user_name])) {
   
    $user = $_SESSION[$session_user_name];
} else {
    
    $user = "Guest";
}


if (isset($_SESSION[$session_email_name])) {
   
    $email = $_SESSION[$session_email_name];
} else {
    
    $email = "noEmail";
}


echo "Refresh count: " . $refresh_count . "<br>";
echo "User: " . $user . "<br>";
echo "Email: " . $email . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refresh Counter</title>
</head>
<body>
    <h1>Welcome to the Refresh Counter</h1>
    <p>Refresh the page to see the counter increase.</p>
</body>
</html>
