<?php
$title = "Activity 2";

$numbers = [10, 5, 20, 2, 8, 15, 3, 12, 7, 25];

$sum = array_sum($numbers);
$difference = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    $difference -= $numbers[$i];
}
$product = array_product($numbers);
$quotient = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] != 0) {
        $quotient /= $numbers[$i];
    }
}

require('header.php');
?>

<h2>Array Operations</h2>
<p>Values: <?= implode(', ', $numbers) ?></p>

<div class="result-box">
    <div class="result-item"><strong>Sum:</strong> <?= number_format($sum, 2) ?></div>
    <div class="result-item"><strong>Difference:</strong> <?= number_format($difference, 2) ?></div>
    <div class="result-item"><strong>Product:</strong> <?= number_format($product, 2) ?></div>
    <div class="result-item"><strong>Quotient:</strong> <?= number_format($quotient, 4) ?></div>
</div>

</div>
</body>
</html>