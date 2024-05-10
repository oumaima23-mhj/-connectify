<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnes</title>
</head>
<body>
    <?php if (isset($_SESSION['success'])): ?>
        <div style="color: green;"><?= $_SESSION['success'] ?></div>
    <?php endif; ?>

    <h1>Liste des personnes</h1>
    <ul>
        <?php if (!empty($persons)): ?>
            <?php foreach ($persons as $person): ?>
                <li>
                    <h2><?= $person->name ?></h2>
                    <p><?= $person->code ?></p>
                    <!-- Autres détails de la personne -->
                    <a href="<?= base_url('personnes/show/'.$person->id) ?>">Voir détails</a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucune personne trouvée.</p>
        <?php endif; ?>
    </ul>

    <!-- Ajouter un lien vers le formulaire -->
    <a href="<?= base_url('personnes/create') ?>">Ajouter une nouvelle personne</a>

</body>
</html>
