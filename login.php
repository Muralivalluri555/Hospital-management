<?php
session_start();
$conn = new mysqli("localhost:3307", "root", "", "dbcms1");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = MD5($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM loginfordoctors WHERE username = ? and password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        $_SESSION['username'] = $username;
        header("Location: index1.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('img/hp.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
            font-weight: bold;
            color: #333;
        }

        .form-label {
            font-weight: bold;
            color: #555;
        }

        .form-control {
            border-radius: 10px;
            border: 2px solid #007bff;
            padding: 10px;
            font-size: 1rem;
        }

        .btn-primary, .btn-secondary {
            width: 100%;
            font-size: 1.2rem;
            padding: 10px;
            border-radius: 10px;
            transition: background-color 0.3s ease;
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: red;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: green;
        }

        .btn-secondary {
            background-color: gray;
            border-color: gray;
        }

        .btn-secondary:hover {
            background-color: darkgray;
        }

        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Login</h2>
    <?php if (isset($error)) { ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php } ?>
    <form method="post" action="" autocomplete="off">
        <!-- Hidden field to trick autofill -->
        <input type="text" name="fakeusernameremembered" style="display:none;">
        <input type="password" name="fakepasswordremembered" style="display:none;">
        
        <div class="mb-3">
            <label for="real_username" class="form-label">Username</label>
            <input type="text" class="form-control" id="real_username" name="username" required autocomplete="new-username">
        </div>
        <div class="mb-3">
            <label for="real_password" class="form-label">Password</label>
            <input type="password" class="form-control" id="real_password" name="password" required autocomplete="new-password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a> <!-- Added Cancel button -->
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
