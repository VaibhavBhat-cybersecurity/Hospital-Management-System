<!DOCTYPE html>
<html>
<head>
    <title>Patient Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Ensure full viewport height */
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        .patient-registration {
            background-color: #fff;
            padding: 40px;
            width: 90%; /* Occupy most of the screen on smaller devices */
            max-width: 600px; /* Limit width on larger screens */
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            box-sizing: border-box; /* Include padding and border in element's total width and height */
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
            width: calc(100% - 24px); /* Account for padding and border */
            box-sizing: border-box;
        }

        .patient-registration textarea {
            height: 120px; /* Set a reasonable height for the textarea */
        }

        .patient-registration button {
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        .patient-registration button:hover {
            background-color: #45a049;
        }

        /* Media query for smaller screens */
        @media (max-width: 400px) {
            .patient-registration {
                padding: 20px; /* Reduce padding on smaller screens */
            }

            .patient-registration h2 {
                font-size: 24px; /* Reduce heading size */
            }

            .patient-registration input,
            .patient-registration select,
            .patient-registration textarea,
            .patient-registration button {
                font-size: 14px; /* Reduce font size for inputs */
            }
        }
    </style>
</head>
<body>
<section class="patient-registration">
    <h2>Patient Registration</h2>
    <form action="patientregisterbackend.php" method="post">
        <label for="patient_name">Full Name</label>
        <input type="text" id="patient_name" name="name" required>

        <label for="patient_age">Age</label>
        <input type="number" id="patient_age" name="age" required>

        <label for="patient_gender">Gender</label>
        <select id="patient_gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="patient_contact">Contact Number</label>
        <input type="text" id="patient_contact" name="contact_number" required>

        <label for="patient_email">Email</label>
        <input type="email" id="patient_email" name="email">

        <label for="patient_address">Address</label>
        <textarea id="patient_address" name="address"></textarea>

        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" required>

        <label for="cpass">Confirm Password</label>
        <input type="password" id="cpass" name="cpass" required>

        <button type="submit">Register</button>
    </form>
</section>
</body>
</html>