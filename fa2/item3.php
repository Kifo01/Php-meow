<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3</title>
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

        <h1 class="page-title">Two-Digit Decimal Combination Generator</h1>

                <?php
                for ($i = 0; $i <= 9; $i++) {
                    for ($j = 0; $j <= 9; $j++) {
                        $combination = $i . $j;
                        
                        echo $combination;
                        
                        if (!($i == 9 && $j == 9)) {
                            echo ", ";
                        }
                    }
                }
                
                ?>
            </div>
        </div>

    </div>
</body>
</html>