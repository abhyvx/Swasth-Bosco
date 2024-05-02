<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="don bosco schools swasth bosco initiative website">
    <meta name="keywords" content="don bosco,swasth,bosco,health,initiative,mission">
    <meta name="author" content="Abhyuday Khanna">
    <link rel="stylesheet" href="style.css">
    <title>Swasth Bosco - Home</title>
</head>
<body>
    
    <div class="top">
        <h1>Don Bosco Alaknanda</h1>
        <h2>Swasth Bosco</h2>
       <?php
       include "php/header.php"
       ?>
    </div>
    

    <div class="container">
        <h3>Contact Us</h3>
        <p>Feel free to contact us and we will get back to you as soon as we can.</p>
        <form action="#" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Your Full Name...">
            <label for="class">Class:</label>
            <select id="class" name="class">
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" placeholder="Subject...">
            <label for="message">Message:</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Something..."></textarea>
            <input type="submit" value="Send">
        </form>
    </div>

</body>
</html>
