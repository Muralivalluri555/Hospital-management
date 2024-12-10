<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f1f3f5;
            color: #212529;
        }
        .navbar {
            background-color: #004085;
            border-bottom: 4px solid #ffc107;
            padding: 1rem 2rem;
        }
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #000000 !important; /* Changed to black */
            letter-spacing: 0.05rem;
        }
        .nav-link {
            font-size: 1.1rem;
            font-weight: 500;
            color: #000000 !important; /* Force links to black */
            margin-right: 0;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out;
            border-radius: 0.25rem;
        }
        .nav-link:hover {
            background-color: #ffc107;
            color: #004085;
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-toggler-icon {
            background-color: #fff;
            border-radius: 0.25rem;
        }
        @media (max-width: 768px) {
            .navbar {
                padding: 0.8rem;
            }
            .nav-link {
                font-size: 1rem;
                margin-right: 0;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Doctor Management</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index1.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form1.php">Add Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list1.php">View Doctors</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
