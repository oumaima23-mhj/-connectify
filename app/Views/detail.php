<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($personne->nom) ?> <?= esc($personne->prenom) ?></title>
</head>
<body>
    <h1><?= esc($personne->nom) ?> <?= esc($personne->prenom) ?></h1>
    <p>Pays: <?= esc($personne->paye) ?></p>
    <p>Ville: <?= esc($personne->ville) ?></p>
    <p>Code postal: <?= esc($personne->code_postal) ?></p>
    <p>Email: <?= esc($personne->email) ?></p>
    <p>Numéro de téléphone: <?= esc($personne->numero_telephone) ?></p>

    <!-- Affichage des détails de la personne spécifique -->
    <h2><?php echo $person->name; ?></h2>
    <p><?php echo $person->code; ?></p>
    <!-- Autres détails de la personne -->

    <a href="/ajouter"><button>Retour à la liste des contactes</button></a>
</body>
</html>
