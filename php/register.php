<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admission_number = $_POST['admission_number'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number']; // Assuming you meant 'mobile_number' instead of 'phone_number'

    // Check if the admission number already exists in the database
    $check_sql = "SELECT * FROM users WHERE admission_number='$admission_number'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        echo "Admission number already exists. Please choose a different one.";
    } else {
        // Insert new user into the database
        $insert_sql = "INSERT INTO users (admission_number, password, email, mobile_number) VALUES ('$admission_number', '$password', '$email', '$mobile_number')";
        
        if ($conn->query($insert_sql) === TRUE) {
            echo "Registration successful!";
            header("Location: http://localhost/Swasth%20Bosco/index.php");
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
