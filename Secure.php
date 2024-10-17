<?php
setcookie('secureCookie', 'This is a secure cookie', time() + (86400 * 30), "/", "", true, true); // Cookie expires in 30 days
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Cookie Example</title>
</head>
<body>

<h1>Secure Cookie Set</h1>
<p>A secure cookie has been set. You can only access this cookie over HTTPS.</p>

<script>
    
    const secureCookie = document.cookie.split('; ').find(row => row.startsWith('secureCookie='));
    if (secureCookie) {
        alert('Secure cookie value: ' + secureCookie.split('=')[1]);
    } else {
        alert('The secure cookie cannot be accessed from JavaScript (as expected).');
    }
</script>

</body>
</html>
