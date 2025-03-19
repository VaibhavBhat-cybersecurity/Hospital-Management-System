<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hpm"; 

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
$conn->query($sql_create_db);

// Select the database
$conn->select_db($dbname);

// Create table if not exists
$sql_create_table = "CREATE TABLE IF NOT EXISTS doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT,
    gender VARCHAR(10),
    contact_number VARCHAR(20),
    email VARCHAR(255) UNIQUE NOT NULL,
    address TEXT,
    password VARCHAR(255) NOT NULL
)";
$conn->query($sql_create_table);

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$contact_number = $_POST['contact_number'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['pass'];

$sql = "INSERT INTO doctors (name, age, gender, contact_number, email, address, password) VALUES ('$name', '$age', '$gender', '$contact_number', '$email', '$address', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Doctor registered!";
    header("Location: doctorlogin.php");
    exit();
} 
else {
        echo "Error: " . $conn->error;
    }
$conn->close();
?>