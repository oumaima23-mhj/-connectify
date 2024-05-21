<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($personne->nom) ?> <?= esc($personne->prenom) ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Ajoutez vos styles personnalisés ici */
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1><?= esc($personne->nom) ?> <?= esc($personne->prenom) ?></h1>
        <div class="row">
            <div class="col-md-6">
                <p><strong>Pays:</strong> <?= esc($personne->pays) ?></p>
                <p><strong>Ville:</strong> <?= esc($personne->ville) ?></p>
                <p><strong>Code postal:</strong> <?= esc($personne->code_postal) ?></p>
                <p><strong>Email:</strong> <?= esc($personne->email) ?></p>
                <p><strong>Numéro de téléphone:</strong> <?= esc($personne->numero_telephone) ?></p>
            </div>
            <!-- Ajoutez d'autres colonnes ici si nécessaire -->
        </div>

        <!-- Affichage des détails de la personne spécifique -->
        <h2><?php echo $person->name; ?></h2>
        <p><?php echo $person->code; ?></p>
        <!-- Autres détails de la personne -->

        <a href="/liste" class="btn btn-primary">Retour à la liste des contacts</a>
    </div>

    <!-- Bootstrap JS (facultatif, uniquement si nécessaire) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Ajoutez vos scripts personnalisés ici -->
</body>
</html>
