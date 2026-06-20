<?php

session_start();

if (isset($_POST['send_colors'])) {
    $_SESSION["color1"] = $_POST['color1'];
    $_SESSION["color2"] = $_POST['color2'];
    $_SESSION["color3"] = $_POST['color3'];
    $_SESSION["color4"] = $_POST['color4'];
    $_SESSION["color5"] = $_POST['color5'];
    
    header("Location: fa5_session_get.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PSA5 Activity 3 - Set Session</title>
    <link rel="stylesheet" href="fa5_style.css">
</head>
<body>
    <div class="container">
        <h1>Favorite Colors</h1>
        <p style="text-align:center; margin-bottom:20px; color:#666;">
            Enter your 5 favorite colors below. <br>
        </p>
        
        <form method="POST" action="fa5_session_set.php">
            <div class="form-group">
                <label>Favorite Color 1:</label>
                <input type="text" name="color1" required placeholder="e.g., Blue">
            </div>
            <div class="form-group">
                <label>Favorite Color 2:</label>
                <input type="text" name="color2" required placeholder="e.g., Purple">
            </div>
            <div class="form-group">
                <label>Favorite Color 3:</label>
                <input type="text" name="color3" required placeholder="e.g., Green">
            </div>
            <div class="form-group">
                <label>Favorite Color 4:</label>
                <input type="text" name="color4" required placeholder="e.g., Orange">
            </div>
            <div class="form-group">
                <label>Favorite Color 5:</label>
                <input type="text" name="color5" required placeholder="e.g., Red">
            </div>
            
            <button type="submit" name="send_colors" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 14px 30px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; font-weight: 600; margin-top: 10px; box-shadow: 0 4px 6px rgba(118, 75, 162, 0.3);">
                Send Colors
            </button>
        </form>
    </div>
</body>
</html>