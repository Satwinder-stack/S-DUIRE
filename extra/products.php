<?php
session_start();
$conn = new mysqli("localhost", "root", "", "ShoppingDB1");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all products
$result = $conn->query("SELECT * FROM Products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <style>
        .product { border: 1px solid #ddd; padding: 10px; margin: 10px; display: inline-block; }
        .product img { width: 150px; height: 150px; }
        .add-to-cart { background-color: green; color: white; padding: 5px; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Products</h2>
    <a href="cart.php">View Cart</a>

    <?php while ($row = $result->fetch_assoc()) : ?>
        <div class="product">
            <img src="<?= $row['image']; ?>" alt="<?= $row['product_name']; ?>">
            <h3><?= htmlspecialchars($row['product_name']); ?></h3>
            <p>Price: $<?= number_format($row['price'], 2); ?></p>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_id" value="<?= $row['product_ID']; ?>">
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </form>
        </div>
    <?php endwhile; ?>
</body>
</html>
