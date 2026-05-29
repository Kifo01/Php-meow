<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SA1 Activity 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="homepage.php" class="back-link">← Back to Home</a>

        <h1 class="page-title">Multiplication Table</h1>

        <div class="multiplication-container">
            <table class="multiplication-table">
                <tbody>
                    <?php
                    for ($row = 0; $row <= 10; $row++): 
                    ?>
                        <tr>
                            <?php for ($col = 0; $col <= 10; $col++): 
                                $product = $row * $col;
                                
                                if ($row == 0 || $col == 0) {
                       
                                    $class = 'cell-zero'; 
                                } 
                                elseif (($row + $col) % 2 == 0) {
                      
                                    $class = 'cell-light-blue'; 
                                } else {
                             
                                    $class = 'cell-white'; 
                                }
                            ?>
                                <td class="<?php echo $class; ?>">
                                    <?php echo $product; ?>
                                </td>
                            <?php endfor; ?>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>