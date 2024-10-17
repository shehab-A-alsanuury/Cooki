<?php
$searchQuery = isset($_GET['query']) ? htmlspecialchars($_GET['query']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
</head>
<body>
<form method="GET" action="">
    <input type="text" name="query" placeholder="Search..." required>
    <button type="submit">Search</button>
</form>

<?php if ($searchQuery): ?>
    <h2>Search Results for: <?php echo $searchQuery; ?></h2>
<?php endif; ?>
</body>
</html>
