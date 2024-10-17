<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $uploadDir = 'uploads/'; 
        move_uploaded_file($file['tmp_name'], $uploadDir . $file['name']);
        
        echo "File uploaded successfully!<br>";
        echo "File Name: " . $file['name'] . "<br>";
        echo "File Type: " . $file['type'] . "<br>";
        echo "File Size: " . $file['size'] . " bytes<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
<h1>Upload a File</h1>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit">Upload</button>
</form>
</body>
</html>
