<?php

if (!isset($_COOKIE['cart'])) {
    setcookie('cart', json_encode([]), time() + (86400 * 30), "/"); 
}


function addToCart($productName) {
    $cart = json_decode($_COOKIE['cart'], true); 
    $cart[] = $productName; 
    setcookie('cart', json_encode($cart), time() + (86400 * 30), "/"); 
}


if (isset($_POST['add_to_cart'])) {
    addToCart($_POST['product_name']); 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
</head>
<body>

<h1>Products</h1>


<form method="POST">
    <div>
        <h2>apple</h2>
        <p>Price: $10</p>
        <button type="submit" name="add_to_cart">Add to Cart</button>
        <input type="hidden" name="product_name" value="apple">
    </div>
    <div>
        <h2>orange</h2>
        <p>Price: $20</p>
        <button type="submit" name="add_to_cart">Add to Cart</button>
        <input type="hidden" name="product_name" value="orange">
    </div>
    <div>
        <h2>banana</h2>
        <p>Price: $30</p>
        <button type="submit" name="add_to_cart">Add to Cart</button>
        <input type="hidden" name="product_name" value="banana">
    </div>
</form>

<a href="cart.php">View Cart</a>

</body>
</html>
