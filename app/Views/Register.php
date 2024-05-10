<!-- app/Views/register_form.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Add your CSS links here -->
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2; /* Light grey background */
            color: #000; /* Black text */
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff; /* White background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Light shadow */
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc; /* Light grey border */
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #3498db; /* Blue button background */
            color: #fff; /* White text */
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 align="center">inscription</h2>
    <form action="<?php echo base_url('register'); ?>" method="post">
        <label for="fname">prenom:</label>
        <input type="text" id="fname" name="fname" required>

        <label for="lname">nom:</label>
        <input type="text" id="lname" name="lname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">numero telephone:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>

        <label for="password">mot de passe:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="inscription">
    </form>
</div>

</body>
</html>
