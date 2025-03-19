<?php
// patient_login_process.php

$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "hpm"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql_create_db) === TRUE) {
    //echo "Database created or already exists successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db($dbname);

// Create table if not exists
$sql_create_table = "CREATE TABLE IF NOT EXISTS patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    age INT,
    gender VARCHAR(10),
    contact_number VARCHAR(20),
    email VARCHAR(255),
    address TEXT
)";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["pass"];

    // Query the database
    $sql_login = "SELECT * FROM patients WHERE name = '$name' AND password = '$password'";
    $result = $conn->query($sql_login);

    if ($result->num_rows > 0) {
        // Login successful
        echo "Login successful!";
        header("Location: patientdashboard.php");
        exit();
    } else {
        // Login failed
        echo "Login failed. Incorrect username or password.";
    }
}

$conn->close();
?>