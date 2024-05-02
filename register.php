<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>

    <div class="top">
        <h1>Don Bosco Alaknanda</h1>
        <h2>Swasth Bosco</h2>
       <?php
       include "php/header.php"
       ?>
    
    <div class="wrapper">
       
        <form action="php/register.php" method="POST">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="Admission Number" id="admission_number" name="admission_number" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" id="password" name="password" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Mobile Number" id="mobile_number" name="mobile_number" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Email" id="email" name="email" required>
            </div>
            
            <div class="btn">
                <button type="submit" class="btn">Register</button>
            </div>
            <div class="register-link">
                <p>Already have an account?<a href="login.php">Login</a></p>
            </div>
        </form>
    </div>

</body>
</html>
