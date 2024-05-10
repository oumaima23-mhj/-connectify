<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une nouvelle personne</title>
</head>
<body>
    <h1>Ajouter une nouvelle personne</h1>
    
    <form method="post" action="<?= base_url('personnes/store') ?>">
        <?= csrf_field() ?>

        <label for="code">Code de la personne :</label>
        <input type="text" name="code" id="code" required>

        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required>

        <label for="lname">Prénom :</label>
        <input type="text" name="lname" id="lname" required>

        <label for="paye">Pays :</label>
        <input type="text" name="paye" id="paye" required>

        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville" required>

        <label for="code_postal">Code postal :</label>
        <input type="text" name="code_postal" id="code_postal" required>

        <label for="email">Email :</label>
        <input type="text" name="email" id="email" required>

        <label for="numero">Numéro de téléphone :</label>
        <input type="number" name="numero" id="numero" required>

        <button type="submit">Ajouter la personne</button>
    </form>

    <a href="<?= base_url('personnes/index') ?>">Retour à la liste des personnes</a>
</body>
</html>
