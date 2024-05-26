<!doctype html>
<html lang="en">
<head>
  <title>Add New User</title>
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
    h2, h4 {
      color: #333;
    }
    .text-center {
      text-align: center;
    }
    .mb-3, .mb-5 {
      margin-bottom: 1rem;
    }
    .my-5 {
      margin-top: 3rem;
      margin-bottom: 3rem;
    }
    .form-group {
      margin-bottom: 1.5rem;
    }
    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      color: #555;
    }
    .form-control {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .btn {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
    }
    .btn-primary {
      background-color: #007bff;
      color: #fff;
    }
    .btn-warning {
      background-color: #ffc107;
      color: #fff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    .btn-warning:hover {
      background-color: #e0a800;
    }
    .d-flex {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3">Ajouter un nouveau contact</h2>
      </div>
      <div class="col-lg-12">
        <div class="d-flex justify-content-between">
          <h4>Ajouter un nouveau contact</h4>
          <a class="btn btn-warning" href="<?php echo base_url(); ?>"><i class="fas fa-angle-left"></i> Retour</a>
        </div>
        <form method="post" action="<?php echo base_url('personnes/store'); ?>">
          <div class="form-group">
            <label>Nom</label>
            <input class="form-control" type="text" name="nom" required>
          </div>
          <div class="form-group">
            <label>Prénom</label>
            <input class="form-control" type="text" name="prenom" required>
          </div>
          <div class="form-group">
            <label>Pays</label>
            <input class="form-control" type="text" name="pays" required>
          </div>
          <div class="form-group">
            <label>Ville</label>
            <input class="form-control" type="text" name="ville" required>
          </div>
          <div class="form-group">
            <label>Code Postal</label>
            <input class="form-control" type="text" name="code_postal" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="email" required>
          </div>
          <div class="form-group">
            <label>Numéro de téléphone</label>
            <input class="form-control" type="text" name="numero_telephone" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
