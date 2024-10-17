<?php

$cookie_name = "user";
$cookie_value = "Ayham"; 
$email_cookie_name = "email"; 
$email_cookie_value = "Ayham@gmail.com"; 
$refresh_counter_name = "refresh_count"; 


setcookie($cookie_name, $cookie_value, time() + 30, "/");


setcookie($email_cookie_name, $email_cookie_value, time() + 10, "/");


if (isset($_COOKIE[$refresh_counter_name])) {
    
    $refresh_count = $_COOKIE[$refresh_counter_name] + 1;
} else {
    
    $refresh_count = 1;
}


setcookie($refresh_counter_name, $refresh_count, time() + 3600, "/");


if (isset($_COOKIE[$cookie_name])) {
   
    $user = $_COOKIE[$cookie_name];
} else {
   
    $user = "Guest";
}


if (isset($_COOKIE[$email_cookie_name])) {
 
    $email = $_COOKIE[$email_cookie_name];
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




