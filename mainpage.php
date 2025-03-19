<!DOCTYPE html>
<html lang="english">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .navbar {
            background-color: #007bff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar h1 {
            color: #fff;
            margin: 0;
        }
        .search-bar input[type="text"] {
            padding: 5px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        h2 {
            color: #333;
        }
        .button {
            display: inline-block;
            margin: 10px;
            padding: 20px 40px;
            font-size: 18px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="navbar">
    <h1>Hospital Management System</h1>
    <div class="search-bar">
        <label>
            <input type="text" placeholder="Search...">
        </label>
    </div>
</div>

<div class="container">
    <h2>Welcome to our Symbiosis Hospital</h2>
    <a href="doctorregister.php" class="button" id="doctor-btn">Doctors</a>
    <a href="patientslogin.php" class="button" id="patient-btn">Patients</a>
</div>

<script>
    document.getElementById('doctor-btn').addEventListener('click', function() {
        alert('Welcome, Doctor!');
        // Here you can add a redirect to the doctor login page or dashboard
    });

    document.getElementById('patient-btn').addEventListener('click', function() {
        alert('Welcome, Patient!');
        // Here you can add a redirect to the patient login page or dashboard
    });
</script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hpm";
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error creating database: " . $conn->error."Please retry";
}

// Select the database
$conn->select_db($dbname);
$conn->close();
?>
</body>
</html>