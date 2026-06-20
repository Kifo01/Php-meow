<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['firstname'])) {
    $firstname = $_GET['firstname'];
    $middlename = $_GET['middlename'];
    $lastname = $_GET['lastname'];
    $dob = $_GET['dob'];
    $email = $_GET['email'];
    $address = $_GET['address'];
    $submitted = true;
} else {
    $submitted = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Info - GET</title>
    <link rel="stylesheet" href="fa5_style.css?v=5">
</head>
<body>
    <div class="container">
        <h1>Personal Info - GET</h1>
        
        <form method="GET" action="fa5_get_form.php">
            <div class="form-row">
                <div class="form-group">
                    <label>First Name:</label>
                    <input type="text" name="firstname" required placeholder="Enter first name">
                </div>
                <div class="form-group">
                    <label>Middle Name:</label>
                    <input type="text" name="middlename" required placeholder="Enter middle name">
                </div>
            </div>
            
            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" name="lastname" required placeholder="Enter last name">
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label>Date of Birth:</label>
                    <input type="date" name="dob" required>
                </div>
                <div class="form-group">
                    <label>Email Address:</label>
                    <input type="email" name="email" required placeholder="email@example.com">
                </div>
            </div>
            
            <div class="form-group">
                <label>Address:</label>
                <textarea name="address" rows="3" required placeholder="Enter your address"></textarea>
            </div>
            
 <button type="submit" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 14px 30px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; font-weight: 600; margin-top: 10px; box-shadow: 0 4px 6px rgba(118, 75, 162, 0.3);">
    Submit via GET
</button>
        </form>

        <?php if ($submitted): ?>
            <div class="output-box">
                <h2>Submitted Data (GET Method)</h2>
                <p><strong>First Name:</strong> <?= htmlspecialchars($firstname) ?></p>
                <p><strong>Middle Name:</strong> <?= htmlspecialchars($middlename) ?></p>
                <p><strong>Last Name:</strong> <?= htmlspecialchars($lastname) ?></p>
                <p><strong>Date of Birth:</strong> <?= htmlspecialchars($dob) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
                <p><strong>Address:</strong> <?= htmlspecialchars($address) ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>