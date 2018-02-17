<?php
/* Database connection settings */

$host = 'localhost';
$user = 'vib';
$pass = 'deadlysql123';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>
