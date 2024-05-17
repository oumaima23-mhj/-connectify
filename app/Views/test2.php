<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des personnes - CodeIgniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <h1>Ajouter une personne</h1>
    <form action="<?= site_url('test'); ?>" method="post">
        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input id="nom" name="nom" class="form-control"/>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom :</label>
            <input id="prenom" name="prenom" class="form-control"/>
        </div>
        <div class="mb-3">
            <label for="pays" class="form-label">Pays :</label>
            <input id="pays" name="pays" class="form-control"/>
        </div>
        <div class="mb-3">
            <label for="ville" class="form-label">Ville :</label>
            <input id="ville" name="ville" class="form-control"/>
        </div>
        <div class="mb-3">
            <label for="code_postal" class="form-label">Code postal :</label>
            <input id="code_postal" name="code_postal" class="form-control"/>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input id="email" name="email" class="form-control"/>
        </div>
        <div class="mb-3">
            <label for="numero_telephone" class="form-label">Numéro de téléphone :</label>
            <input id="numero_telephone" name="numero_telephone" class="form-control"/>
        </div>
        <a href="<?= base_url('test'); ?>"><input class="btn btn-primary" type="submit" value="Ajouter"></a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
