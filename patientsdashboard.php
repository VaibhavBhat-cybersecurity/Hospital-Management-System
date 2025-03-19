<?php
session_start();

if (!isset($_SESSION['patient_name'])) {
    header("Location: patient_login.php");
    exit();
}

$patientName = $_SESSION['patient_name'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hpm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_appointments = "SELECT * FROM appointments WHERE patient_name = '$patientName'";
$result_appointments = $conn->query($sql_appointments);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $patientName; ?>!</h1>

    <h2>Your Appointments</h2>

    <?php
    if ($result_appointments->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Doctor Name</th><th>Appointment Date</th><th>Appointment Time</th><th>Description</th></tr>";
        while ($row = $result_appointments->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["doctor_name"] . "</td>";
            echo "<td>" . $row["appointment_date"] . "</td>";
            echo "<td>" . $row["appointment_time"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No appointments found.</p>";
    }
    ?>

    <p><a href="logout.php">Logout</a></p>
</body>
</html>

<?php
$conn->close();
?>