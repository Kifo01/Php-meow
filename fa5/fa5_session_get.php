<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PSA5 Activity 3 - Get Session</title>
    <link rel="stylesheet" href="fa5_style.css">
</head>
<body>
    <div class="container">
        <h1>Session Colors Received!</h1>
        
        <div class="output-box" style="text-align:center;">
            <h2>Your 5 Favorite Colors:</h2>
         
            <div class="color-box" style="background-color: <?= $_SESSION['color1'] ?>;"></div>
            <div class="color-box" style="background-color: <?= $_SESSION['color2'] ?>;"></div>
            <div class="color-box" style="background-color: <?= $_SESSION['color3'] ?>;"></div>
            <div class="color-box" style="background-color: <?= $_SESSION['color4'] ?>;"></div>
            <div class="color-box" style="background-color: <?= $_SESSION['color5'] ?>;"></div>
            
            <div style="margin-top:20px;">
                <p><strong>Color 1:</strong> <?= $_SESSION['color1'] ?></p>
                <p><strong>Color 2:</strong> <?= $_SESSION['color2'] ?></p>
                <p><strong>Color 3:</strong> <?= $_SESSION['color3'] ?></p>
                <p><strong>Color 4:</strong> <?= $_SESSION['color4'] ?></p>
                <p><strong>Color 5:</strong> <?= $_SESSION['color5'] ?></p>
            </div>
        </div>
        
        <div style="text-align:center; margin-top:20px;">
            <a href="fa5_session_set.php" style="color:#4a6fa5;">Go Back and Set New Colors</a>
        </div>
    </div>
</body>
</html>