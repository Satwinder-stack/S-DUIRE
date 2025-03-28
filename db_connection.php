<?php
// Members: 
// De Jesus, Franz Mark
// Gonzales, John Patrick
// Guaio, Karl
// Jeerh, Satwinder 
// Section: WD-202

// This is for the database connection, like a startup
$servername = "localhost";
$username = "seduire";
$password = "s3du!r3!22";
$database = "shoppingdb1"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>