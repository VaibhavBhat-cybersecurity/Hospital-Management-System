<!DOCTYPE html>
<html>
<head>
  <title>Patient Registration</title>
</head>
<body>
<section class="patient-registration">
  <h2>Patient Registration</h2>
  <form id="registrationForm" action="patientsinformation.php" method="POST">
    <label for="patient_name">Full Name</label>
    <input type="text" id="patient_name" name="name" required><br><br>

    <label for="patient_age">Age</label>
    <input type="number" id="patient_age" name="age" required><br><br>

    <label for="patient_gender">Gender</label>
    <select id="patient_gender" name="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
    <br><br>

    <label for="patient_contact">Contact Number</label>
    <input type="text" id="patient_contact" name="contact_number" required><br><br>

    <label for="patient_email">Email</label>
    <input type="email" id="patient_email" name="email"><br><br>

    <label for="patient_address">Address</label>
    <textarea id="patient_address" name="address"></textarea><br><br>

    <label for="appointment_time">Appointment Time</label>
    <input type="time" id="appointment_time" name="appointment_time" required><br><br>

    <button type="submit">Register</button>
  </form>
</section>

<script>
  // Form validation before submitting the form
  document.getElementById('registrationForm').addEventListener('submit', function(event) {
    const phoneNumber = document.getElementById('patient_contact').value;

    // Validate phone number length
    if (phoneNumber.length === 10) {
        alert('Appointment confirmed');
        // Allow form submission
        // No need to call this.submit() here since it will be submitted automatically after the validation
    } else {
        alert('Phone number must be 10 digits long');
        event.preventDefault(); // Prevent form submission if validation fails
    }
  });
</script>

</body>
</html>
