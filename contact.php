<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file if needed -->
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 50px;
        }
        .social-icons img {
            width: 50px; /* Set the size of the icons */
            height: auto;
            transition: transform 0.2s; /* Animation on hover */
        }
        .social-icons img:hover {
            transform: scale(1.1); /* Scale effect on hover */
        }
    </style>
</head>
<body>
    <h1>Connect with us!</h1>
    <div class="social-icons">
        <a href="https://www.whatsapp.com/" target="_blank">
            <img src="img/w.png" alt="WhatsApp">
        </a>
        <a href="https://www.facebook.com/" target="_blank">
            <img src="img/f.png" alt="Facebook">
        </a>
        <a href="https://www.instagram.com/" target="_blank">
            <img src="img/i.png" alt="Instagram">
        </a>
    </div>
</body>
</html>
