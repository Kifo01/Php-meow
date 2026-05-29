<?php
date_default_timezone_set('Asia/Manila');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'PSA4' ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <nav class="main-nav">
            <a href="homepage.php" class="nav-link">← Back to Home</a>
            <span class="page-title-display"><?= isset($title) ? $title : 'PSA4 Activity' ?></span>
        </nav>
        <hr style="border: 0; border-top: 2px solid #eee; margin: 20px 0;">