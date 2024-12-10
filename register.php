<?php
// Database configuration
$servername = "localhost:3307";
$username = "root";  // change this to your MySQL username
$password = "";      // change this to your MySQL password
$dbname = "dbcms1"; // change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = MD5($_POST['password']);

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO loginfordoctors (username, password, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user, $pass, $email); // "sss" means the three fields are strings

    // Execute the query
    if ($stmt->execute()) {
        // Registration successful, redirect to the home page
        header("Location: index.php");
        exit(); // Ensure the script stops after redirection
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('img/hp.jpg');
            background-size: cover;
            background-position: center;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            margin: 20px auto; /* Aligns the form to the center horizontally */
        }

        h2 {
            text-align: center;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"],
        input[type="button"] {
            width: 48%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="button"] {
            background-color: #f44336; /* Red color for cancel */
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="button"]:hover {
            background-color: #e53935;
        }

        /* Add some padding at the top to keep the form towards the top */
        .container {
            padding: 40px 20px;
        }

        .form-buttons {
            display: flex;
            justify-content: space-between;
        }

        /* Responsive styling */
        @media (max-width: 600px) {
            form {
                padding: 20px;
            }   
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registration Form</h2>
    <form method="post" action="">
        Username: <input type="text" name="username" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <div class="form-buttons">
            <input type="submit" value="Submit">
            <input type="button" value="Cancel" onclick="window.location.href='index.php';">
        </div>
    </form>
</div>

</body>
</html>
