<?php
$drivers = PDO::getAvailableDrivers();
var_dump($drivers);

$DBH = new PDO("sqlite:database.db");
echo '<br><br>';
var_dump($DBH);