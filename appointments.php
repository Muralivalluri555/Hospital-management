<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Appointment</title>
    <style>
        /* Basic reset and styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url("img/hr.jpg"); /* Replace with your image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .appointment-form {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="email"], input[type="date"], input[type="time"], select, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .message {
            text-align: center;
            margin-top: 10px;
            color: green;
            font-weight: bold;
        }

        .error-message {
            text-align: center;
            margin-top: 10px;
            color: red;
            font-weight: bold;
        }

        .redirect-button {
            text-align: center;
            margin-top: 10px;
        }

        .redirect-button button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .redirect-button button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="appointment-form">
        <h2>Book Your Appointment</h2>

        <?php
        session_start();
        $conn = new mysqli("localhost:3307", "root", "", "dbcms1");

        // Check connection
        if ($conn->connect_error) {
            die("<div class='error-message'>Connection failed: " . $conn->connect_error . "</div>");
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Capture form data
            $patient_name = $_POST['patient_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $doctorcode = $_POST['doctorcode'];
            $appointment_date = $_POST['appointment_date'];
            $appointment_time = $_POST['appointment_time'];
            $symptoms = $_POST['symptoms'];

            // Insert data into the database
            $sql = "INSERT INTO appointments (patient_name, email, phone, doctorcode, appointment_date, appointment_time, symptoms) 
                    VALUES ('$patient_name', '$email', '$phone', '$doctorcode', '$appointment_date', '$appointment_time', '$symptoms')";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='message'>Appointment booked successfully!</div>";
                echo "<div class='redirect-button'>
                        <button onclick='redirectToIndex()'>Go to Home</button>
                      </div>";
            } else {
                echo "<div class='error-message'>Error: " . $sql . "<br>" . $conn->error . "</div>";
            }
        }

        // Fetch doctors from the database for the dropdown
        $doctor_sql = "SELECT doctorcode, doctorname FROM doctors";
        $doctor_result = $conn->query($doctor_sql);
        ?>

        <form method="POST" action="">
            <label for="patient_name">Patient Name:</label>
            <input type="text" id="patient_name" name="patient_name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone">

            <label for="doctorcode">Choose Doctor:</label>
            <select id="doctorcode" name="doctorcode" required>
                <option value="">Select a Doctor</option>
                <?php
                if ($doctor_result->num_rows > 0) {
                    while($row = $doctor_result->fetch_assoc()) {
                        echo "<option value='" . $row['doctorcode'] . "'>" . $row['doctorname'] . "</option>";
                    }
                }
                ?>
            </select>

            <label for="appointment_date">Appointment Date:</label>
            <input type="date" id="appointment_date" name="appointment_date" required>

            <label for="appointment_time">Appointment Time:</label>
            <input type="time" id="appointment_time" name="appointment_time" required>

            <label for="symptoms">Symptoms/Reason for Visit:</label>
            <textarea id="symptoms" name="symptoms"></textarea>

            <input type="submit" value="Book Appointment">
        </form>
    </div>

    <script>
        function redirectToIndex() {
            window.location.href = 'index1.php';
        }
    </script>

</body>
</html>
