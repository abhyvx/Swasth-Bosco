<?php
// Check if a session is not already active
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// Get the current page filename
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Don Bosco schools Swasth Bosco initiative website">
    <meta name="keywords" content="don bosco, swasth, bosco, health, initiative, mission">
    <meta name="author" content="Abhyuday Khanna">
    <link rel="stylesheet" href="Swasth Bosco/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="logo" style>
        <img src="images/logo.png">
    </div>
    <div class="nav-container">
        <div class="navi">
            <ul>
                <li <?php if ($current_page === 'index.php') echo 'class="active"'; ?>><a href="index.php">Home</a></li>
                <li <?php if ($current_page === 'about.php') echo 'class="active"'; ?>><a href="about.php">About Us</a></li>
                <li <?php if ($current_page === 'contact.php') echo 'class="active"'; ?>><a href="contact.php">Contact Us</a></li>
                <li <?php if ($current_page === 'reports.php') echo 'class="active"'; ?>><a href="reports.php">Reports</a></li>
                <?php if (isset($_SESSION['admission_number'])): ?>
                    <li <?php if ($current_page === 'myprofile.php') echo 'class="active"'; ?>><a href="myprofile.php">My Profile</a></li>
                <?php else: ?>
                    <li <?php if ($current_page === 'login.php') echo 'class="active"'; ?>><a href="login.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="slogo">
        <img src="images/school-logo.png">
    </div>
</body>
</html>
