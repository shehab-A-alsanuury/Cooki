<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $role = $_POST['role']; 
    $_SESSION['loggedin'] = true;
    $_SESSION['role'] = $role; 
    $_SESSION['last_activity'] = time(); 

    
    header('Location: dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Control</title>
</head>
<body>
    <h1>Select Your Role</h1>
    <form method="POST">
        <label for="role">Choose Role:</label>
        <select name="role" id="role" required>
            <option value="admin">Administrator</option>
            <option value="editor">Content Editor</option>
            <option value="viewer">Regular Viewer</option>
        </select>
        <button type="submit">Access</button>
    </form>
</body>
</html>
