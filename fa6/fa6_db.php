<?php
mysqli_report(MYSQLI_REPORT_OFF);

$fa6_servername = "localhost";
$fa6_username = "root";
$fa6_password = "root";
$fa6_database = "fa6_dog_database";
$fa6_port = 8889;

$connection = @new mysqli($fa6_servername, $fa6_username, $fa6_password, $fa6_database, $fa6_port);

if ($connection->connect_error) {
    $connection = @new mysqli($fa6_servername, $fa6_username, "", $fa6_database);
}

if ($connection->connect_error) {
    die("Connection failed. Create the fa6_dog_database database in phpMyAdmin first, then check fa6_db.php credentials.");
}

function fa6_clean_text($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8");
}
?>
