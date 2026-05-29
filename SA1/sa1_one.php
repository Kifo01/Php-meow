<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SA1 Activity 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="homepage.php" class="back-link">← Back to Home</a>

        <h1 class="page-title">Student Registration Form</h1>

        <?php
        // FORM 1: PERSONAL INFORMATION
        $firstName = "Virgilio";
        $middleName = "Mendoza";
        $lastName = "Marquez";
        $suffix = "Jr.";
        $studentNumber = "202411228";
        $course = "BS Information Technology";
        $yearLevel = "2nd Year";
        $email = "vmmarquez@fit.edu.ph";
        $contactNumber = "09123456789";
        $birthDate = "01/16/2005";

        // FORM 2: EDUCATIONAL ATTAINMENT
        $prevSchool = "UST - Sampaloc";
        $prevCourse = "BS Civil Engineering";
        $reasonTransfer = "Shifting courses";
        ?>

        <!-- DISPLAY SECTION: PERSONAL INFORMATION -->
        <div class="registration-output">
            <h3 style="color: #4a6fa5; margin-bottom: 15px; border-bottom: 2px solid #4a6fa5; padding-bottom: 10px;">
                Personal Information
            </h3>

            <div class="output-row">
                <span class="output-label">First Name:</span>
                <span class="output-value"><?php echo $firstName; ?></span>
            </div>

            <div class="output-row">
                <span class="output-label">Middle Name:</span>
                <span class="output-value"><?php echo $middleName; ?></span>
            </div>

            <div class="output-row">
                <span class="output-label">Last Name:</span>
                <span class="output-value"><?php echo $lastName; ?></span>
            </div>

            <div class="output-row">
                <span class="output-label">Suffix:</span>
                <span class="output-value"><?php echo $suffix; ?></span>
            </div>

            <div class="output-row">
                <span class="output-label">Student Number:</span>
                <span class="output-value"><?php echo $studentNumber; ?></span>
            </div>

            <div class="output-row">
                <span class="output-label">Course:</span>
                <span class="output-value"><?php echo $course; ?></span>
            </div>

            <div class="output-row">
                <span class="output-label">Year Level:</span>
                <span class="output-value"><?php echo $yearLevel; ?></span>
            </div>

            <div class="output-row">
                <span class="output-label">Email Address:</span>
                <span class="output-value"><?php echo $email; ?></span>
            </div>

            <div class="output-row">
                <span class="output-label">Contact Number:</span>
                <span class="output-value"><?php echo $contactNumber; ?></span>
            </div>

            <div class="output-row">
                <span class="output-label">Birth Date:</span>
                <span class="output-value"><?php echo $birthDate; ?></span>
            </div>
        </div>

        <!-- DISPLAY SECTION: EDUCATIONAL ATTAINMENT -->
        <div class="registration-output" style="margin-top: 30px; border-left-color: #764ba2;">
            <h3 style="color: #764ba2; margin-bottom: 15px; border-bottom: 2px solid #764ba2; padding-bottom: 10px;">
                Educational Attainment
            </h3>

            <div class="output-row">
                <span class="output-label">Previous School:</span>
                <span class="output-value"><?php echo $prevSchool; ?></span>
            </div>

            <div class="output-row">
                <span class="output-label">Previous Course:</span>
                <span class="output-value"><?php echo $prevCourse; ?></span>
            </div>

            <div class="output-row">
                <span class="output-label">Reason for Transfer:</span>
                <span class="output-value"><?php echo $reasonTransfer; ?></span>
            </div>
        </div>

    </div>
</body>
</html>