<!-- app/Views/persons/register_form.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    <form action="<?= base_url('persons/register/save') ?>" method="post"> <!-- Modifiez l'action du formulaire -->
        <label for="first_name">Prénom:</label><br>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Nom:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Mot de passe:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>
