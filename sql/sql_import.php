<?php
//connection variables
$host = 'localhost';
$user = 'vib';
$password = 'deadlysql123';
//create mysql connection
$mysqli = new mysqli($host,$user,$password);
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}
//create the database
if ( !$mysqli->query('CREATE DATABASE accounts') ) {
    printf("Errormessage: %s\n", $mysqli->error);
}
//create users table with all the fields
$mysqli->query('
CREATE TABLE IF NOT EXISTS `accounts`.`users`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(100) NOT NULL,
     `last_name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `hash` VARCHAR(32) NOT NULL,
    `active` BOOL NOT NULL DEFAULT 0,
    `usn` VARCHAR(100),
    `branch` VARCHAR(100),
PRIMARY KEY (`id`)
);') or die($mysqli->error);
?>
