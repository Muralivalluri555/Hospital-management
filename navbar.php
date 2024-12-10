<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <style>
        /* Global styles */
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f5;
            color: #2c3e50;
            line-height: 1.6;
        }

        /* Navigation bar styles */
        .navbar {
            background-color: #34495e;
            padding: 15px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .navbar ul li {
            margin: 0 20px;
        }

        .navbar ul li a {
            color: #ecf0f1;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            padding: 8px 20px;
            transition: background-color 0.3s, color 0.3s ease;
            border-radius: 5px;
        }

        .navbar ul li a:hover {
            background-color: #1abc9c;
            color: #fff;
        }

        /* Section styles */
        section {
            padding: 10px 10px;
            text-align: center;
            background-color: #ecf0f1;
            border-radius: 10px;
            max-width: 1200px;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 32px;
            color: #2980b9;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #7f8c8d;
        }

        /* Button styles */
        button {
            background-color: #2980b9;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #3498db;
            transform: scale(1.05);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .navbar ul {
                flex-direction: column;
            }

            .navbar ul li {
                margin: 10px 0;
            }

            section {
                padding: 40px 20px;
            }

            h2 {
                font-size: 28px;
            }

            button {
                font-size: 16px;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="form.php">Enter Details</a></li>
            <li><a href="list.php">View Services</a></li>
            <li><a href="../../index1.php">Go to Home</a></li>
        </ul>
    </nav>

    
</body>
</html>
