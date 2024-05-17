<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des personnes - CodeIgniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Liste des personnes</h1>
        
        <!-- Bouton pour créer un nouveau contact -->
        <div class="mb-3">
            <a href="<?= base_url('test2'); ?>" class="btn btn-primary">Créer un nouveau contact</a>
        </div>
        
        <!-- Formulaire de recherche -->
        <form class="form-inline my-2 my-lg-0 mb-3">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        
        <!-- Tableau des personnes -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($personnes)): ?>
                    <?php foreach ($personnes as $personne): ?>
                    <tr>
                        <td scope="row"><?= $personne->id ?></td>
                        <td><?= $personne->nom ?></td>
                        <td><?= $personne->prenom ?></td>
                        <td>
                            <div class="d-flex flex-row">
                                <form class="mx-1" action="<?= site_url('personnes/detail/'.$personne->id) ?>" method="get">
                                    <button class="btn btn-primary" type="submit">Voir détail</button>
                                </form>
                                <form class="mx-1" action="<?= site_url('personnes/supprimer/'.$personne->id) ?>" method="post">
                                    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                                <form class="mx-1" action="<?= site_url('personnes/modifier/'.$personne->id) ?>" method="get">
                                    <button class="btn btn-warning" type="submit">Modifier</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="4" class="text-center">Aucune personne trouvée</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
