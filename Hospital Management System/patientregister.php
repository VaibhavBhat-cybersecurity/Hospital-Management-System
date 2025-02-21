<!DOCTYPE html>
<html>
<head>
  <title>Patient Registration</title>
</head>
<body>
<section class="patient-registration">
  <h2>Patient Registration</h2>
  <form>
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

    <label for="patient_name">Full Name</label>
    <input type="text" id="pass" name="pass" required><br><br>

    <label for="Confirm password">Full Name</label>
    <input type="text" id="cpass" name="cpass" required><br><br>

    <button type="submit">Register</button>
  </form>
</section>