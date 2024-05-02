
<?php
session_start();
include('php/connection.php');

if (!isset($_SESSION['admission_number'])) {
    echo("<script>alert('Please Login To View Your Reports!');</script>");

    // Delay the redirection to index.php by 3 seconds
    echo("<script>setTimeout(function() { window.location.href = 'index.php'; }, 500);</script>");

    exit;
}


$admission_number = $_SESSION['admission_number'];

$sql = "SELECT * FROM health_reports WHERE admission_number = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $admission_number);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Health Reports</title>
   
</head>
<body>
   
    <div class="top">
        <h1>Don Bosco Alaknanda</h1>
        <h2>Swasth Bosco</h2>
        <!-- Include your header navigation here -->
        <?php include "php/header.php"; ?>
    </div>

    <div class="report-container">
        <h2>Health Reports</h2>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='report-box'>";
                echo "<h3>Report Date: " . $row['report_date'] . "</h3>";
                echo "<p><strong>Health Score:</strong> " . $row['health_score'] . "</p>";
                echo "<p><strong>Overall Points:</strong> " . $row['overall_points'] . "</p>";
                echo "<p><strong>Health Status:</strong> " . $row['health_status'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "No health reports found.";
        }

        $stmt->close();
        $conn->close();
        ?>
    </div>
</body>
</html>
