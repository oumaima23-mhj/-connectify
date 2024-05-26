<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur Connectify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("bng");
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
            background-color: #fff;
            color: #3498db;
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
    <h1>Bienvenue sur notre application Connectify</h1>
    <a href="/persons/register_form"><button class="btn btn-primary">Créer un compte</button></a>
<a href="/login"><button class="btn btn-success">Se connecter</button></a>

</div>

<div class="footer">
    <p>&copy; <?= date("Y"); ?> Connectify. Tous droits réservés.</p>
</div>
</body>
</html>
