<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Health Survey</title>
</head>
<body> 
    
    <div class="top">
        <h1>Don Bosco Alaknanda</h1>
        <h2>Swasth Bosco</h2>
       <?php
       include "php/header.php"
       ?>
    </div>
    
    <br>

    <form action="php/submit_report.php" method="POST">
    <h2>Health Survey</h2>
        <p>Answer the following questions:</p>

        <!-- Question 1 -->
        <label for="q1">How would you rate your sleep quality? (1-10)</label>
        <input type="number" id="q1" name="q1" min="1" max="10" required><br><br>

        <!-- Question 2 -->
        <label for="q2">How often do you exercise per week? (0-7)</label>
        <input type="number" id="q2" name="q2" min="0" max="7" required><br><br>

        <!-- Question 3 -->
        <label for="q3">How many servings of fruits and vegetables do you eat daily? (0-10)</label>
        <input type="number" id="q3" name="q3" min="0" max="10" required><br><br>
        
        <!-- Submit Button -->
        <button type="submit">Submit Survey</button>
    </form>
</body>
</html>
