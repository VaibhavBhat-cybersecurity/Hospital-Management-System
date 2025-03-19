<?php
// patient_registration_process.php

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
    age INT,
    gender VARCHAR(10),
    contact_number VARCHAR(20),
    email VARCHAR(255),
    address TEXT,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql_create_table) === TRUE) {
    //echo "Table created or already exists successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Process form submission
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$contact_number = $_POST["contact_number"];
$email = $_POST["email"];
$address = $_POST["address"];
$password = $_POST["pass"];
$cpassword = $_POST["cpass"];

    // Input Validation (Important!)
    if ($password !== $cpassword) 
    {
        echo "Passwords do not match.";
    } else 
    {
        echo "Passwords match.";
        $sql_insert = "INSERT INTO patients (name, age, gender, contact_number, email, address, password) VALUES ('$name', '$age', '$gender', '$contact_number', '$email', '$address', '$hashed_password')";
        if ($conn->query($sql_insert) === TRUE) {
            echo "New record created successfully";
            header("Location: patientslogin.php");
            exit();
        } 
        else 
        {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    }
$conn->close();
?>