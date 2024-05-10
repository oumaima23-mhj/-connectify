<!-- app/Views/home.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    <!-- Add your CSS links here -->
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #3498db; /* Blue background */
            color: #000; /* Black text */
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f2f2f2;
            text-align: center;
            padding: 10px 0;
        }
        button {
            background-color: #fff; /* White button background */
            color: #3498db; /* Blue button text color */
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>bienvenu sur notre application Connectify</h1>
    <a href="<?php echo base_url('register'); ?>"><button>cree un compte</button></a>
    <a href="<?php echo base_url('login'); ?>"><button>connecte</button></a>
</div>

<div class="footer">
    <p>&copy; <?php echo date("Y"); ?> Connectify. All Rights Reserved.</p>
</div>

</body>
</html>
