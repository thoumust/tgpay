<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tgpay";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS `$dbname`";
if ($con->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $con->error . "\n";
}

// Switch to the created database
if (!$con->select_db($dbname)) {
    die("Error selecting database: " . $con->error);
}

// Create Users table
$sql = "CREATE TABLE IF NOT EXISTS `Users` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
if ($con->query($sql) === TRUE) {
    echo "Table Users created successfully\n";
} else {
    echo "Error creating table Users: " . $con->error . "\n";
}

// Create hitter table
$sql = "CREATE TABLE IF NOT EXISTS `hitter` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    sahod INT NOT NULL,
    nahit VARCHAR(255)
)";
if ($con->query($sql) === TRUE) {
    echo "Table hitter created successfully\n";
} else {
    echo "Error creating table hitter: " . $con->error . "\n";
}

// Create tagasalpak table
$sql = "CREATE TABLE IF NOT EXISTS `tagasalpak` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    sahod INT NOT NULL,
    nasalpakan INT
)";
if ($con->query($sql) === TRUE) {
    echo "Table tagasalpak created successfully\n";
} else {
    echo "Error creating table tagasalpak: " . $con->error . "\n";
}

// Close connection
$con->close();