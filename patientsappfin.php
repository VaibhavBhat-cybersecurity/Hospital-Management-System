<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient's Appointment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .appointment-form {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            width: 600px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .form-group label {
            flex: 1;
            font-weight: bold;
            font-size: 16px;
            margin-right: 10px;
        }

        .form-group input,
        .form-group select {
            flex: 2;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-button {
            margin-top: 30px; /* Space above the button */
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="appointment-form">
        <h1>Patient Appointment Form</h1>
        <form action="#">
            <div class="form-group">
                <label for="patient-name">Name of Patient:</label>
                <input type="text" id="patient-name" name="patient-name" required>
            </div>
            
            <div class="form-group">
                <label for="appointment-date">Date:</label>
                <input type="date" id="appointment-date" name="appointment-date" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="contact-number">Contact Number:</label>
                <input type="tel" id="contact-number" name="contact-number" required>
            </div>
            
            <div class="form-group">
                <label for="doctor-name">Doctor's Name:</label>
                <select id="doctor-name" name="doctor-name" required>
                    <option value="">Select Doctor</option>
                    <option value="doctor-a">Doctor A</option>
                    <option value="doctor-b">Doctor B</option>
                    <option value="doctor-c">Doctor C</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="appointment-time">Appointment Time:</label>
                <input type="time" id="appointment-time" name="appointment-time" required>
            </div>
            
            <div class="form-button">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
