<?php
$title = "Activity 3";

function calculateOperations($num1, $num2, $num3) {
    $sum = $num1 + $num2 + $num3;
    $diff = $num1 - $num2 - $num3;
    $prod = $num1 * $num2 * $num3;
    
    if ($num2 != 0 && $num3 != 0) {
        $quot = $num1 / $num2 / $num3;
    } else {
        $quot = "Undefined (Division by Zero)";
    }

    return [
        'sum' => $sum,
        'diff' => $diff,
        'prod' => $prod,
        'quot' => $quot
    ];
}

$results = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $n3 = $_POST['num3'];
    $results = calculateOperations($n1, $n2, $n3);
}

require('header.php');
?>

<h2>Calculator (User Defined Function)</h2>

<form method="POST" action="">
    <div class="form-group">
        <label>Number 1:</label>
        <input type="number" name="num1" step="any" required value="<?= isset($_POST['num1']) ? $_POST['num1'] : '' ?>">
    </div>
    <div class="form-group">
        <label>Number 2:</label>
        <input type="number" name="num2" step="any" required value="<?= isset($_POST['num2']) ? $_POST['num2'] : '' ?>">
    </div>
    <div class="form-group">
        <label>Number 3:</label>
        <input type="number" name="num3" step="any" required value="<?= isset($_POST['num3']) ? $_POST['num3'] : '' ?>">
    </div>
    <button type="submit" class="btn-submit">Calculate</button>
</form>

<?php if ($results): ?>
<div class="result-box" style="margin-top: 30px;">
    <h3>Results for (<?= $_POST['num1'] ?>, <?= $_POST['num2'] ?>, <?= $_POST['num3'] ?>)</h3>
    <div class="result-item"><strong>Sum:</strong> <?= $results['sum'] ?></div>
    <div class="result-item"><strong>Difference:</strong> <?= $results['diff'] ?></div>
    <div class="result-item"><strong>Product:</strong> <?= $results['prod'] ?></div>
    <div class="result-item"><strong>Quotient:</strong> <?= $results['quot'] ?></div>
</div>
<?php endif; ?>

</div>
</body>
</html>