<?php
if (isset($_POST['firstname'])) {
    setcookie("firstname", $_POST['firstname'], time() + 10, "/");
    setcookie("middlename", $_POST['middlename'], time() + 20, "/");
    setcookie("lastname", $_POST['lastname'], time() + 30, "/");
    
    header("Location: fa5_cookies.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PSA5 Activity 2 - Cookies</title>
    <link rel="stylesheet" href="fa5_style.css?v=2">
</head>
<body>
    <div class="container">
        <h1>Cookie Creation</h1>
        
        <div style="background: white; padding: 25px; border-radius: 8px; border: 1px solid #ccc; margin-bottom: 30px;">
            <h2 style="color: #4a6fa5; margin-top: 0; border-bottom: 2px solid #eee; padding-bottom: 10px;">
                Set Your Cookies
            </h2>
            <form method="POST" action="fa5_cookies.php">
                <div class="form-group">
                    <label>First Name (Expires in 10s):</label>
                    <input type="text" name="firstname" value="Virgilio" required>
                </div>
                <div class="form-group">
                    <label>Middle Name (Expires in 20s):</label>
                    <input type="text" name="middlename" value="Mendoza" required>
                </div>
                <div class="form-group">
                    <label>Last Name (Expires in 30s):</label>
                    <input type="text" name="lastname" value="Marquez" required>
                </div>
                
                <button type="submit" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; padding: 12px 24px; border-radius: 6px; font-weight: bold; cursor: pointer; box-shadow: 0 4px 6px rgba(118, 75, 162, 0.3);">
                    Set Cookies
                </button>

            </form>
        </div>

        <div class="output-box">
            <h2>Cookie Status</h2>
            
            <?php if (isset($_COOKIE['firstname'])): ?>
                <p style="color:green;"><strong>First Name (10s):</strong> <?= $_COOKIE['firstname'] ?> ✅</p>
            <?php else: ?>
                <p style="color:red;"><strong>First Name:</strong> ❌ Expired</p>
            <?php endif; ?>

            <?php if (isset($_COOKIE['middlename'])): ?>
                <p style="color:green;"><strong>Middle Name (20s):</strong> <?= $_COOKIE['middlename'] ?> ✅</p>
            <?php else: ?>
                <p style="color:red;"><strong>Middle Name:</strong> ❌ Expired</p>
            <?php endif; ?>

            <?php if (isset($_COOKIE['lastname'])): ?>
                <p style="color:green;"><strong>Last Name (30s):</strong> <?= $_COOKIE['lastname'] ?> ✅</p>
            <?php else: ?>
                <p style="color:red;"><strong>Last Name:</strong> ❌ Expired</p>
            <?php endif; ?>
        </div>

    </div>
</body>
</html>