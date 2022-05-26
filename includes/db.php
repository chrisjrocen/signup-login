<?php
/**
 * Database connection
 * 
 * @Package category
 */

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "my_test";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
