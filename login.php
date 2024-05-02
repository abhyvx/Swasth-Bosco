<?php
session_start();

// Include database connection
include "php/connection.php";

// Initialize variables
$admission_number = $err_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $admission_number = $_POST['admission_number'];
    $password = $_POST['password'];

    // Validate user credentials
    $sql = "SELECT * FROM users WHERE admission_number='$admission_number' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Authentication successful, set session variables
        $_SESSION['admission_number'] = $admission_number;
        header("Location: http://localhost/Swasth%20Bosco/index.php"); // Redirect to dashboard or another page
        
    } else {
        $err_msg = "Invalid admission number or password";
        echo "<script>alert('$err_msg');</script>"; 
        
    }
}

// Close database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

    <div class="top">
        <h1>Don Bosco Alaknanda</h1>
        <h2>Swasth Bosco</h2>
       <?php
       include "php/header.php"
       ?>
    </div>
    <div class="wrapper">
        
        <form action="login.php" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="admission_number" placeholder="Admission Number" value="<?= $admission_number ?>" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" name="remember">Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div>

            <div class="btn">
                <button type="submit" class="btn" name="submit">Login</button>
            </div>

            <div class="register-link">
                <p>Don't have an account?<a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>
