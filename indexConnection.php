<?php
session_start();
$conn = new mysqli("localhost", "root", "", "ShoppingDB1");

// Handle logout request via AJAX
if (isset($_POST['logout'])) {
    session_destroy();
    echo json_encode(["status" => "success", "message" => "Logged out successfully"]);
    exit();
}
?>