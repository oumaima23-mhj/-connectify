<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Details</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 800px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      color: #333;
    }
    .mt-5 {
      margin-top: 3rem;
    }
    .row {
      display: flex;
      justify-content: space-between;
    }
    .col-md-6 {
      width: 48%;
    }
    p {
      color: #555;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1><?= esc($personne->nom) ?> <?= esc($personne->prenom) ?></h1>
    <div class="row">
      <div class="col-md-6">
        <p><strong>Pays:</strong> <?= esc($personne->pays) ?></p>
        <p><strong>Ville:</strong> <?= esc($personne->ville) ?></p>
        <p><strong>Code Postal:</strong> <?= esc($personne->code_postal) ?></p>
        <p><strong>Email:</strong> <?= esc($personne->email) ?></p>
        <p><strong>Numéro de téléphone:</strong> <?= esc($personne->numero_telephone) ?></p>
      </div>
    </div>
    <a href="<?= base_url('personnes/liste') ?>" class="btn btn-primary">Retour à la liste des contacts</a>
  </div>
</body>
</html>
