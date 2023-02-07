<?php

$serverName = "localhost";
$username= "root";
$password="";
$dbName="zmshop";

$conn = mysqli_connect($serverName, $username, $password, $dbName);

if (!$conn) {
    echo "Error: Unable to connect to MySQL.";
    exit;
}
