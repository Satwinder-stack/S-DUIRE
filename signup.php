<?php
// Members: 
// De Jesus, Franz Mark
// Gonzales, John Patrick
// Guaio, Karl
// Jeerh, Satwinder 
// Section: WD-202

// Display errors for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start the session
session_start();
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Input validation
    if (empty($username) || empty($password)) {
        echo "<script>alert('Username and password cannot be empty or contain only spaces!'); window.location.href='signup.php';</script>";
        exit;
    }

    if (!preg_match('/^(?=.*[A-Z])(?=.*\W)[^\s]{6,}$/', $password)) {
        echo "<script>alert('Password must be at least 6 characters long, contain at least one uppercase letter, one special character, and no white spaces.'); window.location.href='signup.php';</script>";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!'); window.location.href='signup.php';</script>";
        exit;
    }

    // Check if username already exists
    $sql = "SELECT * FROM customers WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Username already exists! Choose a different username.'); window.location.href='signup.php';</script>";
        exit;
    }

    // Hash the password before inserting into the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert new customer into the database
    $sql = "INSERT INTO customers (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $hashed_password);

    // Execute the prepared statement
    if ($stmt->execute()) {
        $_SESSION['customer_id'] = $stmt->insert_id;
        $_SESSION['username'] = $username;
        header("Location: login.php");
        exit;
    } else {
        die("Error inserting data: " . $stmt->error);
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SÉDUIRE - Sign Up</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Sign_up.css" type="text/css" />    
</head>
<body>
    <!-- Sign-up form -->
    <div class="signup-container">
        <h1>Create Account</h1>
        <form action="signup.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" style="width: 95%;" name="username" required>

            <!-- Password field with eye toggle -->
            <label for="password">Password</label>
            <div class="password-container">
                <input type="password" id="password" name="password" required>
                <i class="ri-eye-off-line toggle-password" data-target="password" style="margin-top: -0.5em;"></i>
            </div>

            <label for="confirm_password">Confirm Password</label>
            <div class="password-container">
                <input type="password" id="confirm_password" name="confirm_password" required>
                <i class="ri-eye-off-line toggle-password" data-target="confirm_password" style="margin-top: -0.5em;"></i>
            </div>

            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="Login.php">Login</a></p>
    </div>

    <script>
    // Toggle password visibility
    document.querySelectorAll(".toggle-password").forEach(item => {
        item.addEventListener("click", function() {
            let input = document.getElementById(this.getAttribute("data-target"));
            if (input.type === "password") {
                input.type = "text";
                this.classList.replace("ri-eye-off-line", "ri-eye-line");
            } else {
                input.type = "password";
                this.classList.replace("ri-eye-line", "ri-eye-off-line");
            }
        });
    });

    // Password validation on the client-side
    document.querySelector("form").addEventListener("submit", function(event) {
        let password = document.getElementById("password").value;
        let confirmPassword = document.getElementById("confirm_password").value;
        
        let passwordPattern = /^(?=.*[A-Z])(?=.*\W)[^\s]{6,}$/;

        if (!passwordPattern.test(password)) {
            alert("Password must be at least 6 characters long, contain at least one uppercase letter, one special character, and no white spaces.");
            event.preventDefault();
        } else if (password !== confirmPassword) {
            alert("Passwords do not match!");
            event.preventDefault();
        }
    });
    </script>
</body>
</html>