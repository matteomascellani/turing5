<?php

// params to connect to a database
$dbHost = "127.0.0.1:8889";
$dbUser = "root";
$dbPass = "root";
$dbName = "phptutorial";

// connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Database connection failed!");  
} 