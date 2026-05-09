<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Activity 3 - Two-Digit Combinations</title>
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
                // Using nested for loops to generate combinations
                for ($i = 0; $i <= 9; $i++) {
                    for ($j = 0; $j <= 9; $j++) {
                        // Format with leading zeros
                        $combination = $i . $j;
                        
                        // Add comma after each number
                        echo $combination;
                        
                        // Add comma and space if not the last number
                        if (!($i == 9 && $j == 9)) {
                            echo ", ";
                        }
                    }
                }
                
                // Alternative method using single loop:
                /*
                for ($num = 0; $num <= 99; $num++) {
                    // Format with leading zeros using str_pad or sprintf
                    echo str_pad($num, 2, "0", STR_PAD_LEFT);
                    
                    if ($num < 99) {
                        echo ", ";
                    }
                }
                */
                ?>
            </div>
        </div>

    </div>
</body>
</html>