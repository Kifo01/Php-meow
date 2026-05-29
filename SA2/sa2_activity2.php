<?php
$title = "Activity 2";
require('sa2_header.php');

function volumeCube($side) {
    return pow($side, 3);
}

function volumeRectangularPrism($length, $width, $height) {
    return $length * $width * $height;
}

function volumeCylinder($radius, $height) {
    return pi() * pow($radius, 2) * $height;
}

function volumePyramid($baseArea, $height) {
    return ($baseArea * $height) / 3;
}

function volumeCone($radius, $height) {
    return (pi() * pow($radius, 2) * $height) / 3;
}

function volumeSphere($radius) {
    return (4/3) * pi() * pow($radius, 3);
}

$cubeSide = 5;
$prismLength = 6;
$prismWidth = 4;
$prismHeight = 8;
$cylinderRadius = 3;
$cylinderHeight = 10;
$pyramidBase = 25;
$pyramidHeight = 12;
$coneRadius = 4;
$coneHeight = 9;
$sphereRadius = 5;
?>

<h2 style="text-align:center; color:#4a6fa5; margin-bottom:40px;">Volume Formulas Calculator</h2>

<table style="width:100%; border-collapse:collapse; margin-top:20px;">
    <thead>
        <tr style="background:#4a6fa5; color:white;">
            <th style="padding:12px; border:1px solid #ddd; text-align:left;">Shape</th>
            <th style="padding:12px; border:1px solid #ddd; text-align:left;">Formula</th>
            <th style="padding:12px; border:1px solid #ddd; text-align:left;">Values</th>
            <th style="padding:12px; border:1px solid #ddd; text-align:left;">Volume</th>
        </tr>
    </thead>
    <tbody>
        <tr style="background:#f9f9f9;">
            <td style="padding:12px; border:1px solid #ddd; font-weight:bold; color:#4a6fa5;">Cube</td>
            <td style="padding:12px; border:1px solid #ddd; font-family:'Courier New', monospace;">V = s³</td>
            <td style="padding:12px; border:1px solid #ddd;">Side: <?= $cubeSide ?> units</td>
            <td style="padding:12px; border:1px solid #ddd; font-weight:bold; color:#667eea;"><?= number_format(volumeCube($cubeSide), 2) ?> cubic units</td>
        </tr>
        
        <tr style="background:white;">
            <td style="padding:12px; border:1px solid #ddd; font-weight:bold; color:#4a6fa5;">Right Rectangular Prism</td>
            <td style="padding:12px; border:1px solid #ddd; font-family:'Courier New', monospace;">V = l × w × h</td>
            <td style="padding:12px; border:1px solid #ddd;"><?= $prismLength ?> × <?= $prismWidth ?> × <?= $prismHeight ?></td>
            <td style="padding:12px; border:1px solid #ddd; font-weight:bold; color:#667eea;"><?= number_format(volumeRectangularPrism($prismLength, $prismWidth, $prismHeight), 2) ?> cubic units</td>
        </tr>
        
        <tr style="background:#f9f9f9;">
            <td style="padding:12px; border:1px solid #ddd; font-weight:bold; color:#4a6fa5;">Cylinder</td>
            <td style="padding:12px; border:1px solid #ddd; font-family:'Courier New', monospace;">V = πr²h</td>
            <td style="padding:12px; border:1px solid #ddd;">r=<?= $cylinderRadius ?>, h=<?= $cylinderHeight ?></td>
            <td style="padding:12px; border:1px solid #ddd; font-weight:bold; color:#667eea;"><?= number_format(volumeCylinder($cylinderRadius, $cylinderHeight), 2) ?> cubic units</td>
        </tr>
        
        <tr style="background:white;">
            <td style="padding:12px; border:1px solid #ddd; font-weight:bold; color:#4a6fa5;">Pyramid</td>
            <td style="padding:12px; border:1px solid #ddd; font-family:'Courier New', monospace;">V = (B × h) ÷ 3</td>
            <td style="padding:12px; border:1px solid #ddd;">Base=<?= $pyramidBase ?>, h=<?= $pyramidHeight ?></td>
            <td style="padding:12px; border:1px solid #ddd; font-weight:bold; color:#667eea;"><?= number_format(volumePyramid($pyramidBase, $pyramidHeight), 2) ?> cubic units</td>
        </tr>
        
        <!-- Cone -->
        <tr style="background:#f9f9f9;">
            <td style="padding:12px; border:1px solid #ddd; font-weight:bold; color:#4a6fa5;">Cone</td>
            <td style="padding:12px; border:1px solid #ddd; font-family:'Courier New', monospace;">V = (πr²h) ÷ 3</td>
            <td style="padding:12px; border:1px solid #ddd;">r=<?= $coneRadius ?>, h=<?= $coneHeight ?></td>
            <td style="padding:12px; border:1px solid #ddd; font-weight:bold; color:#667eea;"><?= number_format(volumeCone($coneRadius, $coneHeight), 2) ?> cubic units</td>
        </tr>
        
        <tr style="background:white;">
            <td style="padding:12px; border:1px solid #ddd; font-weight:bold; color:#4a6fa5;">Sphere</td>
            <td style="padding:12px; border:1px solid #ddd; font-family:'Courier New', monospace;">V = (4/3)πr³</td>
            <td style="padding:12px; border:1px solid #ddd;">Radius: <?= $sphereRadius ?> units</td>
            <td style="padding:12px; border:1px solid #ddd; font-weight:bold; color:#667eea;"><?= number_format(volumeSphere($sphereRadius), 2) ?> cubic units</td>
        </tr>
    </tbody>
</table>

<?php require('sa2_footer.php'); ?>