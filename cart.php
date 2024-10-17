<?php

if (!isset($_COOKIE['cart'])) {
    setcookie('cart', json_encode([]), time() + (86400 * 30), "/"); 
}


$cartItems = json_decode($_COOKIE['cart'], true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>

<h1>Your Shopping Cart</h1>

<?php if (empty($cartItems)): ?>
    <p>Your cart is empty.</p>
<?php else: ?>
    <ul>
        <?php foreach ($cartItems as $item): ?>
            <li><?php echo htmlspecialchars($item); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<a href="products.php">Continue Shopping</a>

</body>
</html>




