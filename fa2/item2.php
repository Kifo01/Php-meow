<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Back Button -->
        <a href="index.php" class="back-link">← Back to Home</a>

        <!-- Shared Header Info -->
        <div class="header-info">
            <strong>Name:</strong> Virgilio M. Marquez Jr. &nbsp;&nbsp;&nbsp; 
            <strong>Date:</strong> May 9, 2026
        </div>

        <h1 class="page-title">Grade Ranking Program</h1>

        <!-- Input Form -->
        <div class="grade-form">
            <form method="POST" action="">
                <div class="form-row">
                    <div class="form-group">
                        <label>Student Name:</label>
                        <input type="text" name="studentName" placeholder="Enter Full Name" required>
                    </div>
                    <div class="form-group">
                        <label>Grade (0-100):</label>
                        <input type="number" name="grade" min="0" max="100" placeholder="Enter Grade" required>
                    </div>
                </div>
                <button type="submit" name="submit" class="submit-btn">Calculate Rank</button>
            </form>
        </div>

        <?php

        if (!empty($_POST['grade'])) {
            
            $name = $_POST['studentName'];
            $grade = $_POST['grade'];
            $rank = "";
            $image = "";
            $imageText = "";

            // Conditional Statements for Grading
            if ($grade >= 93 && $grade <= 100) {
                $rank = "A";
                $image = "happy.jpeg";
                $imageText = "Excellent Performance";
            } elseif ($grade >= 90 && $grade <= 92) {
                $rank = "A-";
                $image = "happy.jpeg";
                $imageText = "Excellent Performance";
            } elseif ($grade >= 87 && $grade <= 89) {
                $rank = "B+";
                $image = "huh.jpeg";
                $imageText = "Good Performance";
            } elseif ($grade >= 83 && $grade <= 86) {
                $rank = "B";
                $image = "huh.jpeg";
                $imageText = "Good Performance";
            } elseif ($grade >= 80 && $grade <= 82) {
                $rank = "B-";
                $image = "huh.jpeg";
                $imageText = "Good Performance";
            } elseif ($grade >= 77 && $grade <= 79) {
                $rank = "C+";
                $image = "sad.jpeg";
                $imageText = "Average Performance";
            } elseif ($grade >= 73 && $grade <= 76) {
                $rank = "C";
                $image = "sad.jpeg";
                $imageText = "Average Performance";
            } elseif ($grade >= 70 && $grade <= 72) {
                $rank = "C-";
                $image = "sad.jpeg";
                $imageText = "Average Performance";
            } elseif ($grade >= 67 && $grade <= 69) {
                $rank = "D+";
                $image = "sad.jpeg";
                $imageText = "Needs Improvement";
            } elseif ($grade >= 63 && $grade <= 66) {
                $rank = "D";
                $image = "sad.jpeg";
                $imageText = "Needs Improvement";
            } elseif ($grade >= 60 && $grade <= 62) {
                $rank = "D-";
                $image = "sad.jpeg";
                $imageText = "Needs Improvement";
            } elseif ($grade >= 0 && $grade < 60) {
                $rank = "F";
                $image = "sad.jpeg";
                $imageText = "Failed";
            } else {
                $rank = "Invalid";
                $image = "";
                $imageText = "Invalid Grade";
            }

            // Display Results Layout
            if ($rank != "Invalid") {
                ?>
                <div class="results-wrapper">
                    <!-- Name Box -->
                    <div class="name-box">
                        Name: <?php echo $name; ?>
                    </div>

                    <!-- Rank and Grade Boxes -->
                    <div class="info-grid">
                        <div class="info-box">
                            <h3>Rank:</h3>
                            <p><?php echo $rank; ?></p>
                        </div>
                        <div class="info-box">
                            <h3>Grade:</h3>
                            <p><?php echo $grade; ?></p>
                        </div>
                    </div>

                    <!-- Picture Box -->
                    <div class="picture-box">
                        <h3>Picture</h3>
                        <?php if (!empty($image)) { ?>
                            <img src="<?php echo $image; ?>" alt="<?php echo $imageText; ?>">
                            <p style="margin-top:10px; font-size:0.9rem;"><?php echo $imageText; ?></p>
                        <?php } else { ?>
                            <p>No Image</p>
                        <?php } ?>
                    </div>
                </div>
                <?php
            } else {
                echo "<p style='color:red; text-align:center;'>Invalid Grade Entered</p>";
            }
        }
        ?>
    </div>
</body>
</html>