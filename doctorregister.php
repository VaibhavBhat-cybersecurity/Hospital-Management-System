<!DOCTYPE html>
<html>
<head>
    <title>Doctor Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .patient-registration {
            background-color: #fff;
            padding: 40px;
            width: 50%;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .patient-registration h2 {
            margin-bottom: 30px;
            font-size: 28px;
            text-align: center;
        }

        .patient-registration form {
            display: flex;
            flex-direction: column;
        }

        .patient-registration label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        .patient-registration input,
        .patient-registration select,
        .patient-registration textarea {
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .patient-registration button {
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .patient-registration button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<section class="patient-registration">
    <h2>Doctor Registration</h2>
    <form action="doctorregisterbackend.php" method="post">
        <label for="doctor_name">Full Name</label>
        <input type="text" id="doctor_name" name="name" required>

        <label for="doctor_age">Age</label>
        <input type="number" id="doctor_age" name="age" required>

        <label for="doctor_gender">Gender</label>
        <select id="doctor_gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="doctor_contact">Contact Number</label>
        <input type="tel" id="doctor_contact" name="contact_number" required>

        <label for="doctor_email">Email</label>
        <input type="email" id="doctor_email" name="email" required>

        <label for="doctor_address">Address</label>
        <textarea id="doctor_address" name="address"></textarea>

        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" required>

        <label for="cpass">Confirm Password</label>
        <input type="password" id="cpass" name="cpass" required>

        <button type="submit">Register</button>
    </form>
</section>
<script>
    document.querySelector('form').addEventListener('submit', function (e) {
        const password = document.getElementById('pass').value;
        const confirmPassword = document.getElementById('cpass').value;

        if (password !== confirmPassword) {
            e.preventDefault();
            alert('Passwords do not match!');
        }
    });
</script>
</body>
</html>