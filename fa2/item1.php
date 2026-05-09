    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Activity 1 </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <a href="index.php" class="back-link">← Back to Home</a>

            <div class="header-info">
                <strong>Name:</strong> Virgilio M. Marquez Jr. &nbsp;&nbsp;&nbsp; <strong>Date:</strong> May 9, 2026
            </div>
            
            <h1 class="page-title">MEASURE CONVERSION CHART - LENGTHS (UK)</h1>

            <?php
            // SINGLE BASE VALUE
            $base = 1;

            // METRIC CONVERSIONS
            $cm_to_mm = $base * 10;
            $dm_to_cm = $base * 10;
            $m_to_cm = $base * 100;
            $km_to_m = $base * 1000;

            // IMPERIAL CONVERSIONS
            $ft_to_in = $base * 12;
            $yd_to_ft = $base * 3;
            $ch_to_yd = $base * 22;
            $fur_to_yd = $base * 220;
            $fur_to_ch = $base * 10;
            $mi_to_yd = $base * 1760;
            $mi_to_fur = $base * 8;

            // METRIC -> IMPERIAL CONVERSIONS
            $mm_to_in = $base * 0.03937;
            $cm_to_in = $base * 0.39370;
            $m_to_in = $base * 39.37008;
            $m_to_ft = $base * 3.28084;
            $m_to_yd = $base * 1.09361;
            $km_to_yd = $base * 1093.6133;
            $km_to_mi = $base * 0.62137;

            // IMPERIAL -> METRIC CONVERSIONS
            $in_to_cm = $base * 2.54;
            $ft_to_cm = $base * 30.48;
            $yd_to_cm = $base * 91.44;
            $yd_to_m = $base * 0.9144;
            $mi_to_m = $base * 1609.344;
            $mi_to_km = $base * 1.609344;

            function formatNum($num) {
                if ($num == floor($num)) {
                    return number_format($num, 0);
                } else {
                    return rtrim(rtrim(number_format($num, 7, '.', ''), '0'), '.');
                }
            }
            ?>

            <!-- METRIC CONVERSIONS TABLE -->
            <table>
                <tr>
                    <th colspan="4">METRIC CONVERSIONS</th>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> centimetre</td>
                    <td>=</td>
                    <td><?php echo formatNum($cm_to_mm); ?> millimetres</td>
                    <td><?php echo formatNum($base); ?> cm = <?php echo formatNum($cm_to_mm); ?> mm</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> decimetre</td>
                    <td>=</td>
                    <td><?php echo formatNum($dm_to_cm); ?> centimetres</td>
                    <td><?php echo formatNum($base); ?> dm = <?php echo formatNum($dm_to_cm); ?> cm</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> metre</td>
                    <td>=</td>
                    <td><?php echo formatNum($m_to_cm); ?> centimetres</td>
                    <td><?php echo formatNum($base); ?> m = <?php echo formatNum($m_to_cm); ?> cm</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> kilometre</td>
                    <td>=</td>
                    <td><?php echo formatNum($km_to_m); ?> metres</td>
                    <td><?php echo formatNum($base); ?> km = <?php echo formatNum($km_to_m); ?> m</td>
                </tr>
            </table>

            <!-- IMPERIAL CONVERSIONS TABLE -->
            <table>
                <tr>
                    <th colspan="4">IMPERIAL CONVERSIONS</th>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> foot</td>
                    <td>=</td>
                    <td><?php echo formatNum($ft_to_in); ?> inches</td>
                    <td><?php echo formatNum($base); ?> ft = <?php echo formatNum($ft_to_in); ?> in</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> yard</td>
                    <td>=</td>
                    <td><?php echo formatNum($yd_to_ft); ?> feet</td>
                    <td><?php echo formatNum($base); ?> yd = <?php echo formatNum($yd_to_ft); ?> ft</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> chain</td>
                    <td>=</td>
                    <td><?php echo formatNum($ch_to_yd); ?> yards</td>
                    <td><?php echo formatNum($base); ?> ch = <?php echo formatNum($ch_to_yd); ?> yd</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> furlong</td>
                    <td>=</td>
                    <td><?php echo formatNum($fur_to_yd); ?> yards (or <?php echo formatNum($fur_to_ch); ?> chains)</td>
                    <td><?php echo formatNum($base); ?> fur = <?php echo formatNum($fur_to_yd); ?> yd (or <?php echo formatNum($fur_to_ch); ?> ch)</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> mile</td>
                    <td>=</td>
                    <td><?php echo formatNum($mi_to_yd); ?> yards (or <?php echo formatNum($mi_to_fur); ?> furlongs)</td>
                    <td><?php echo formatNum($base); ?> mi = <?php echo formatNum($mi_to_yd); ?> yd (or <?php echo formatNum($mi_to_fur); ?> fur)</td>
                </tr>
            </table>

            <!-- METRIC -> IMPERIAL CONVERSIONS TABLE -->
            <table>
                <tr>
                    <th colspan="4">METRIC -> IMPERIAL CONVERSIONS</th>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> millimetre</td>
                    <td>=</td>
                    <td><?php echo formatNum($mm_to_in); ?> inches</td>
                    <td><?php echo formatNum($base); ?> mm = <?php echo formatNum($mm_to_in); ?> in</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> centimetre</td>
                    <td>=</td>
                    <td><?php echo formatNum($cm_to_in); ?> inches</td>
                    <td><?php echo formatNum($base); ?> cm = <?php echo formatNum($cm_to_in); ?> in</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> metre</td>
                    <td>=</td>
                    <td><?php echo formatNum($m_to_in); ?> inches</td>
                    <td><?php echo formatNum($base); ?> m = <?php echo formatNum($m_to_in); ?> in</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> metre</td>
                    <td>=</td>
                    <td><?php echo formatNum($m_to_ft); ?> feet</td>
                    <td><?php echo formatNum($base); ?> m = <?php echo formatNum($m_to_ft); ?> ft</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> metre</td>
                    <td>=</td>
                    <td><?php echo formatNum($m_to_yd); ?> yards</td>
                    <td><?php echo formatNum($base); ?> m = <?php echo formatNum($m_to_yd); ?> yd</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> kilometre</td>
                    <td>=</td>
                    <td><?php echo formatNum($km_to_yd); ?> yards</td>
                    <td><?php echo formatNum($base); ?> km = <?php echo formatNum($km_to_yd); ?> yd</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> kilometre</td>
                    <td>=</td>
                    <td><?php echo formatNum($km_to_mi); ?> miles</td>
                    <td><?php echo formatNum($base); ?> km = <?php echo formatNum($km_to_mi); ?> mi</td>
                </tr>
            </table>

            <!-- IMPERIAL -> METRIC CONVERSIONS TABLE -->
            <table>
                <tr>
                    <th colspan="4">IMPERIAL -> METRIC CONVERSIONS</th>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> inch</td>
                    <td>=</td>
                    <td><?php echo formatNum($in_to_cm); ?> centimetres</td>
                    <td><?php echo formatNum($base); ?> in = <?php echo formatNum($in_to_cm); ?> cm</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> foot</td>
                    <td>=</td>
                    <td><?php echo formatNum($ft_to_cm); ?> centimetres</td>
                    <td><?php echo formatNum($base); ?> ft = <?php echo formatNum($ft_to_cm); ?> cm</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> yard</td>
                    <td>=</td>
                    <td><?php echo formatNum($yd_to_cm); ?> centimetres</td>
                    <td><?php echo formatNum($base); ?> yd = <?php echo formatNum($yd_to_cm); ?> cm</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> yard</td>
                    <td>=</td>
                    <td><?php echo formatNum($yd_to_m); ?> metres</td>
                    <td><?php echo formatNum($base); ?> yd = <?php echo formatNum($yd_to_m); ?> m</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> mile</td>
                    <td>=</td>
                    <td><?php echo formatNum($mi_to_m); ?> metres</td>
                    <td><?php echo formatNum($base); ?> mi = <?php echo formatNum($mi_to_m); ?> m</td>
                </tr>
                <tr>
                    <td><?php echo formatNum($base); ?> mile</td>
                    <td>=</td>
                    <td><?php echo formatNum($mi_to_km); ?> kilometres</td>
                    <td><?php echo formatNum($base); ?> mi = <?php echo formatNum($mi_to_km); ?> km</td>
                </tr>
            </table>
        </div>
    </body>
    </html>