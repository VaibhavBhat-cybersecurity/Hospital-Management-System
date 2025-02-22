<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hpm";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select the database
$conn->select_db($dbname);

// Create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS Patientappointment (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    contact_number VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address TEXT NOT NULL,
    appointment_time DATETIME NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert data
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$contact_number = $_POST['contact_number'];
$email = $_POST['email'];
$address = $_POST['address'];
$appointment_time = $_POST['appointment_time'];

$sql = "INSERT INTO Patientappointment (full_name, age, gender, contact_number, email, address, appointment_time) VALUES ('$name', $age, '$gender', '$contact_number', '$email', '$address', '$appointment_time')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $conn->error;
}

// Retrieve and display records
$sql = "SELECT * FROM Patientappointment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Patient Records</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Full Name</th><th>Age</th><th>Gender</th><th>Contact Number</th><th>Email</th><th>Address</th><th>Appointment Time</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["full_name"] . "</td>
                <td>" . $row["age"] . "</td>
                <td>" . $row["gender"] . "</td>
                <td>" . $row["contact_number"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["address"] . "</td>
                <td>" . $row["appointment_time"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}
$conn->close();
?>
