<!DOCTYPE HTML>
<html>
<head>
    <title>Patients Login Page</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 450px; /* Adjust width as needed */
        }

        h1 {
            text-align: center;
            color: #007bff; /* Example color */
            margin-bottom: 20px;
        }

        h2 {
           text-align: center;
           margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 12px); /* Account for padding and border */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Include padding and border in element's total width and height */
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .register-link {
            text-align: center;
            margin-top: 15px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h1>Welcome to Symbiosis Hospital</h1>
        <h2>Patients Login</h2>
        <form>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="password">Password</label>
            <input type="password" id="pass" name="pass" required><br><br>

            <input type="submit" class="submitbutton" id="submitbutton" value="Login">
        </form>
        <div class="register-link">
            <a href="patientregister.php">New here? Register</a>
        </div>
    </div>
</body>
</html>