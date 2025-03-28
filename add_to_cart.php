<?php
// Members: 
// De Jesus, Franz Mark
// Gonzales, John Patrick
// Guaio, Karl
// Jeerh, Satwinder 
// Section: WD-202

// Session start here
session_start();
require 'db_connection.php';

// To check the quantity here
if (!isset($_POST['product_id']) || !isset($_POST['quantity'])) {
    header("Location: index.php?error=missing_data");
    exit();
}

$product_id = intval($_POST['product_id']);
$quantity = intval($_POST['quantity']);

if ($quantity <= 0) {
    header("Location: index.php?error=invalid_quantity");
    exit();
}

$product = null;
$category = null;
$table = null;

// To check here if the products are from men or women
$query = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
$query->bind_param("i", $product_id);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
    $category = "men";
    $table = "products";
}

if (!$product) {
    $query = $conn->prepare("SELECT * FROM products2 WHERE product_id = ?");
    $query->bind_param("i", $product_id);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        $category = "women";
        $table = "products2";
    }
}

$query->close();

if (!$product) {
    header("Location: index.php?error=product_not_found");
    exit();
}

// To check the quantity available
$quantity_available = intval($product['quantity_available']);
if ($quantity > $quantity_available) {
    header("Location: index.php?error=not_enough_stock");
    exit();
}

// To update the current available quantity here
$new_quantity = $quantity_available - $quantity;
$update_query = $conn->prepare("UPDATE $table SET quantity_available = ? WHERE product_id = ?");
$update_query->bind_param("ii", $new_quantity, $product_id);
$update_query->execute();
$update_query->close();


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$cart_key = $category . '_' . $product['product_id'];

// To get the basis of the table here
if (!isset($_SESSION['cart'][$cart_key])) {
    $_SESSION['cart'][$cart_key] = [
        'product_id' => $product['product_id'],
        'name' => $product['product_name'],
        'price' => $product['price'],
        'quantity' => 0,
        'image' => $product['image'],
        'category' => $category
    ];
}


$_SESSION['cart'][$cart_key]['quantity'] += $quantity;

$conn->close();

header("Location: cart.php?success=added");
exit();
?>
