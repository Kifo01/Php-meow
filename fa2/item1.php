<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Activity 1 - Length Conversion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Back Button -->
        <a href="index.php" class="back-link">← Back to Home</a>

        <!-- Name and Date Header -->
        <div class="activity-header">
            <strong>Name:</strong> Virgilio M. Marquez Jr. &nbsp;&nbsp;&nbsp; <strong>Date:</strong> May 9, 2026
        </div>
        
        <h1 class="page-title">MEASURE CONVERSION CHART - LENGTHS (UK)</h1>

        <?php
        // ============================================
        // METRIC CONVERSIONS
        // ============================================
        $cm_to_mm_value = 1;
        $cm_to_mm_result = $cm_to_mm_value * 10;  // Formula: cm × 10 = mm
        
        $dm_to_cm_value = 1;
        $dm_to_cm_result = $dm_to_cm_value * 10;  // Formula: dm × 10 = cm
        
        $m_to_cm_value = 1;
        $m_to_cm_result = $m_to_cm_value * 100;  // Formula: m × 100 = cm
        
        $km_to_m_value = 1;
        $km_to_m_result = $km_to_m_value * 1000;  // Formula: km × 1000 = m

        // ============================================
        // IMPERIAL CONVERSIONS
        // ============================================
        $ft_to_in_value = 1;
        $ft_to_in_result = $ft_to_in_value * 12;  // Formula: ft × 12 = in
        
        $yd_to_ft_value = 1;
        $yd_to_ft_result = $yd_to_ft_value * 3;  // Formula: yd × 3 = ft
        
        $ch_to_yd_value = 1;
        $ch_to_yd_result = $ch_to_yd_value * 22;  // Formula: ch × 22 = yd
        
        $fur_to_yd_value = 1;
        $fur_to_yd_result = $fur_to_yd_value * 220;  // Formula: fur × 220 = yd
        $fur_to_ch_result = $fur_to_yd_value * 10;  // Formula: fur × 10 = ch
        
        $mi_to_yd_value = 1;
        $mi_to_yd_result = $mi_to_yd_value * 1760;  // Formula: mi × 1760 = yd
        $mi_to_fur_result = $mi_to_yd_value * 8;  // Formula: mi × 8 = fur

        // ============================================
        // METRIC -> IMPERIAL CONVERSIONS
        // ============================================
        $mm_to_in_value = 1;
        $mm_to_in_result = $mm_to_in_value * 0.03937;  // Formula: mm × 0.03937 = in
        
        $cm_to_in_value = 1;
        $cm_to_in_result = $cm_to_in_value * 0.39370;  // Formula: cm × 0.39370 = in
        
        $m_to_in_value = 1;
        $m_to_in_result = $m_to_in_value * 39.37008;  // Formula: m × 39.37008 = in
        
        $m_to_ft_value = 1;
        $m_to_ft_result = $m_to_ft_value * 3.28084;  // Formula: m × 3.28084 = ft
        
        $m_to_yd_value = 1;
        $m_to_yd_result = $m_to_yd_value * 1.09361;  // Formula: m × 1.09361 = yd
        
        $km_to_yd_value = 1;
        $km_to_yd_result = $km_to_yd_value * 1093.6133;  // Formula: km × 1093.6133 = yd
        
        $km_to_mi_value = 1;
        $km_to_mi_result = $km_to_mi_value * 0.62137;  // Formula: km × 0.62137 = mi

        // ============================================
        // IMPERIAL -> METRIC CONVERSIONS
        // ============================================
        $in_to_cm_value = 1;
        $in_to_cm_result = $in_to_cm_value * 2.54;  // Formula: in × 2.54 = cm
        
        $ft_to_cm_value = 1;
        $ft_to_cm_result = $ft_to_cm_value * 30.48;  // Formula: ft × 30.48 = cm
        
        $yd_to_cm_value = 1;
        $yd_to_cm_result = $yd_to_cm_value * 91.44;  // Formula: yd × 91.44 = cm
        
        $yd_to_m_value = 1;
        $yd_to_m_result = $yd_to_m_value * 0.9144;  // Formula: yd × 0.9144 = m
        
        $mi_to_m_value = 1;
        $mi_to_m_result = $mi_to_m_value * 1609.344;  // Formula: mi × 1609.344 = m
        
        $mi_to_km_value = 1;
        $mi_to_km_result = $mi_to_km_value * 1.609344;  // Formula: mi × 1.609344 = km
        ?>

        <!-- METRIC CONVERSIONS TABLE -->
        <table>
            <tr>
                <th colspan="4">METRIC CONVERSIONS</th>
            </tr>
            <tr>
                <td><?php echo $cm_to_mm_value; ?> centimetre</td>
                <td>=</td>
                <td><?php echo $cm_to_mm_result; ?> millimetres</td>
                <td><?php echo $cm_to_mm_value; ?> cm = <?php echo $cm_to_mm_result; ?> mm</td>
            </tr>
            <tr>
                <td><?php echo $dm_to_cm_value; ?> decimetre</td>
                <td>=</td>
                <td><?php echo $dm_to_cm_result; ?> centimetres</td>
                <td><?php echo $dm_to_cm_value; ?> dm = <?php echo $dm_to_cm_result; ?> cm</td>
            </tr>
            <tr>
                <td><?php echo $m_to_cm_value; ?> metre</td>
                <td>=</td>
                <td><?php echo $m_to_cm_result; ?> centimetres</td>
                <td><?php echo $m_to_cm_value; ?> m = <?php echo $m_to_cm_result; ?> cm</td>
            </tr>
            <tr>
                <td><?php echo $km_to_m_value; ?> kilometre</td>
                <td>=</td>
                <td><?php echo $km_to_m_result; ?> metres</td>
                <td><?php echo $km_to_m_value; ?> km = <?php echo $km_to_m_result; ?> m</td>
            </tr>
        </table>

        <!-- IMPERIAL CONVERSIONS TABLE -->
        <table>
            <tr>
                <th colspan="4">IMPERIAL CONVERSIONS</th>
            </tr>
            <tr>
                <td><?php echo $ft_to_in_value; ?> foot</td>
                <td>=</td>
                <td><?php echo $ft_to_in_result; ?> inches</td>
                <td><?php echo $ft_to_in_value; ?> ft = <?php echo $ft_to_in_result; ?> in</td>
            </tr>
            <tr>
                <td><?php echo $yd_to_ft_value; ?> yard</td>
                <td>=</td>
                <td><?php echo $yd_to_ft_result; ?> feet</td>
                <td><?php echo $yd_to_ft_value; ?> yd = <?php echo $yd_to_ft_result; ?> ft</td>
            </tr>
            <tr>
                <td><?php echo $ch_to_yd_value; ?> chain</td>
                <td>=</td>
                <td><?php echo $ch_to_yd_result; ?> yards</td>
                <td><?php echo $ch_to_yd_value; ?> ch = <?php echo $ch_to_yd_result; ?> yd</td>
            </tr>
            <tr>
                <td><?php echo $fur_to_yd_value; ?> furlong</td>
                <td>=</td>
                <td><?php echo $fur_to_yd_result; ?> yards (or <?php echo $fur_to_ch_result; ?> chains)</td>
                <td><?php echo $fur_to_yd_value; ?> fur = <?php echo $fur_to_yd_result; ?> yd (or <?php echo $fur_to_ch_result; ?> ch)</td>
            </tr>
            <tr>
                <td><?php echo $mi_to_yd_value; ?> mile</td>
                <td>=</td>
                <td><?php echo $mi_to_yd_result; ?> yards (or <?php echo $mi_to_fur_result; ?> furlongs)</td>
                <td><?php echo $mi_to_yd_value; ?> mi = <?php echo $mi_to_yd_result; ?> yd (or <?php echo $mi_to_fur_result; ?> fur)</td>
            </tr>
        </table>

        <!-- METRIC -> IMPERIAL CONVERSIONS TABLE -->
        <table>
            <tr>
                <th colspan="4">METRIC -> IMPERIAL CONVERSIONS</th>
            </tr>
            <tr>
                <td><?php echo $mm_to_in_value; ?> millimetre</td>
                <td>=</td>
                <td><?php echo $mm_to_in_result; ?> inches</td>
                <td><?php echo $mm_to_in_value; ?> mm = <?php echo $mm_to_in_result; ?> in</td>
            </tr>
            <tr>
                <td><?php echo $cm_to_in_value; ?> centimetre</td>
                <td>=</td>
                <td><?php echo $cm_to_in_result; ?> inches</td>
                <td><?php echo $cm_to_in_value; ?> cm = <?php echo $cm_to_in_result; ?> in</td>
            </tr>
            <tr>
                <td><?php echo $m_to_in_value; ?> metre</td>
                <td>=</td>
                <td><?php echo $m_to_in_result; ?> inches</td>
                <td><?php echo $m_to_in_value; ?> m = <?php echo $m_to_in_result; ?> in</td>
            </tr>
            <tr>
                <td><?php echo $m_to_ft_value; ?> metre</td>
                <td>=</td>
                <td><?php echo $m_to_ft_result; ?> feet</td>
                <td><?php echo $m_to_ft_value; ?> m = <?php echo $m_to_ft_result; ?> ft</td>
            </tr>
            <tr>
                <td><?php echo $m_to_yd_value; ?> metre</td>
                <td>=</td>
                <td><?php echo $m_to_yd_result; ?> yards</td>
                <td><?php echo $m_to_yd_value; ?> m = <?php echo $m_to_yd_result; ?> yd</td>
            </tr>
            <tr>
                <td><?php echo $km_to_yd_value; ?> kilometre</td>
                <td>=</td>
                <td><?php echo $km_to_yd_result; ?> yards</td>
                <td><?php echo $km_to_yd_value; ?> km = <?php echo $km_to_yd_result; ?> yd</td>
            </tr>
            <tr>
                <td><?php echo $km_to_mi_value; ?> kilometre</td>
                <td>=</td>
                <td><?php echo $km_to_mi_result; ?> miles</td>
                <td><?php echo $km_to_mi_value; ?> km = <?php echo $km_to_mi_result; ?> mi</td>
            </tr>
        </table>

        <!-- IMPERIAL -> METRIC CONVERSIONS TABLE -->
        <table>
            <tr>
                <th colspan="4">IMPERIAL -> METRIC CONVERSIONS</th>
            </tr>
            <tr>
                <td><?php echo $in_to_cm_value; ?> inch</td>
                <td>=</td>
                <td><?php echo $in_to_cm_result; ?> centimetres</td>
                <td><?php echo $in_to_cm_value; ?> in = <?php echo $in_to_cm_result; ?> cm</td>
            </tr>
            <tr>
                <td><?php echo $ft_to_cm_value; ?> foot</td>
                <td>=</td>
                <td><?php echo $ft_to_cm_result; ?> centimetres</td>
                <td><?php echo $ft_to_cm_value; ?> ft = <?php echo $ft_to_cm_result; ?> cm</td>
            </tr>
            <tr>
                <td><?php echo $yd_to_cm_value; ?> yard</td>
                <td>=</td>
                <td><?php echo $yd_to_cm_result; ?> centimetres</td>
                <td><?php echo $yd_to_cm_value; ?> yd = <?php echo $yd_to_cm_result; ?> cm</td>
            </tr>
            <tr>
                <td><?php echo $yd_to_m_value; ?> yard</td>
                <td>=</td>
                <td><?php echo $yd_to_m_result; ?> metres</td>
                <td><?php echo $yd_to_m_value; ?> yd = <?php echo $yd_to_m_result; ?> m</td>
            </tr>
            <tr>
                <td><?php echo $mi_to_m_value; ?> mile</td>
                <td>=</td>
                <td><?php echo $mi_to_m_result; ?> metres</td>
                <td><?php echo $mi_to_m_value; ?> mi = <?php echo $mi_to_m_result; ?> m</td>
            </tr>
            <tr>
                <td><?php echo $mi_to_km_value; ?> mile</td>
                <td>=</td>
                <td><?php echo $mi_to_km_result; ?> kilometres</td>
                <td><?php echo $mi_to_km_value; ?> mi = <?php echo $mi_to_km_result; ?> km</td>
            </tr>
        </table>
    </div>
</body>
</html>