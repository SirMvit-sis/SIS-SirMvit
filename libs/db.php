<?php
/* Database connection settings */

$host = 'localhost';
$user = 'admin';
$pass = 'admin';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>
