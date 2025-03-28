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
error_reporting(E_ALL);
ini_set('display_errors', 1);

// This is to ensure the username and password are written properly with a predefined format
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if (empty($username) || empty($password)) {
        echo "<script>alert('Username and password cannot be empty or contain only spaces!'); window.location.href='signup.php';</script>";
        exit;
    }
// This is the predefined format
    if (!preg_match('/^(?=.*[A-Z])(?=.*\W)[^\s]{6,}$/', $password)) {
        echo "<script>alert('Password must be at least 6 characters long, contain at least one uppercase letter, one special character, and no white spaces.'); window.location.href='signup.php';</script>";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!'); window.location.href='signup.php';</script>";
        exit;
    }

    // This is to read from the customers table to be referenced later on
    $sql = "SELECT * FROM Customers WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        echo "<script>alert('Username already exists! Choose a different username.'); window.location.href='signup.php';</script>";
        exit;
    }

    // This is to set the password correct with a hash
    $sql = "INSERT INTO Customers (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $hashed_password);

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
    <!-- This is the form that contains the username and password registration -->
    <div class="signup-container">
        <h1>Create Account</h1>
        <form action="signup.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" style="width: 95%;" name="username" required>

            <!-- This is a function where when the eye is clicked, the password will show -->
            <label for="password">Password</label>
            <div class="password-container">
                <input type="password" id="password" name="password" required>
                <i class="ri-eye-off-line toggle-password" data-target="password" style="margin-top: -0.5em;"></i>
            </div>
            <!-- This is a function where when the eye is clicked, the password will show -->
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
        // This is the script for the eye password 
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
    // This is to ensure the password is correctly written
    document.querySelector("form").addEventListener("submit", function(event) {
        let password = document.getElementById("password").value;
        let confirmPassword = document.getElementById("confirm_password").value;
        
        let passwordPattern = /^(?=.*[A-Z])(?=.*\W)[^\s]{6,}$/;
        // This is to check if the password is correct or not
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
