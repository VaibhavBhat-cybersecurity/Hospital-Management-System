<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hpm";
$table = "PatientsLogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->select_db($dbname);
// Check if the table exists
$sql = "SHOW TABLES LIKE '$table'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    // Table does not exist, create it
    $sql = "CREATE TABLE $table (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) NOT NULL,
        pass VARCHAR(100) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

// Get the form data
$user = $_POST['name'];
$pass = $_POST['pass'];

// Query the database to check if the username and password match
$sql = "SELECT * FROM $table WHERE username = '$user' AND pass = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login successful!";
    echo "<a href="patientspage.php">Click here</a>";
} else {
    echo "Invalid username or password.";
}
$conn->close();
?>
