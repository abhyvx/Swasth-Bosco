<?php
session_start();
include('connection.php');

if (!isset($_SESSION['admission_number'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admission_number = $_SESSION['admission_number'];
    $q1 = intval($_POST['q1']); // Sleep quality (1-10)
    $q2 = intval($_POST['q2']); // Exercise frequency (0-7)
    $q3 = intval($_POST['q3']); // Fruit and vegetable intake (0-10)

    // Calculate health score
    $health_score = ($q1 + $q2 + $q3) / 3;

    // Determine health status based on health score
    if ($health_score >= 7) {
        $health_status = "Good";
    } elseif ($health_score >= 4) {
        $health_status = "Medium";
    } else {
        $health_status = "Poor";
    }

    // Insert health report into database
    $sql = "INSERT INTO health_reports (admission_number, health_score, health_status) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ids", $admission_number, $health_score, $health_status);
    $stmt->execute();
    $stmt->close();

    header("Location: http://localhost/Swasth%20Bosco/reports.php");
    exit;
} else {
    echo "Invalid request";
}
?>
