<?php
session_start();

// Assuming authentication is successful
$_SESSION['admission_number'] = $admission_number;
header("Location: http://localhost/Swasth%20Bosco/index.html");
exit;


// Respond with JSON indicating the login status
header('Content-Type: application/json');
echo json_encode(['loggedIn' => $loggedIn]);
?>
