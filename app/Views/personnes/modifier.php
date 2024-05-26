<!doctype html>
<html lang="en">
<head>
  <title>Edit Contact</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3">Codeigniter 4 CRUD (Update) Application</h2>
      </div>
      <div class="col-lg-12">
        <div class="d-flex justify-content-between">
          <h4>Edit Contact</h4>
          <a class="btn btn-warning" href="<?php echo base_url(); ?>"><i class="fas fa-angle-left"></i> Back</a>
        </div>
        <form method="post" action="<?php echo base_url('personnes/update/' . $contact->id); ?>">
          <div class="form-group">
            <label>Nom</label>
            <input class="form-control" type="text" name="nom" value="<?php echo esc($contact->nom); ?>" required>
          </div>
          <div class="form-group">
            <label>Prénom</label>
            <input class="form-control" type="text" name="prenom" value="<?php echo esc($contact->prenom); ?>" required>
          </div>
          <div class="form-group">
            <label>Pays</label>
            <input class="form-control" type="text" name="pays" value="<?php echo esc($contact->pays); ?>" required>
          </div>
          <div class="form-group">
            <label>Ville</label>
            <input class="form-control" type="text" name="ville" value="<?php echo esc($contact->ville); ?>" required>
          </div>
          <div class="form-group">
            <label>Code Postal</label>
            <input class="form-control" type="text" name="code_postal" value="<?php echo esc($contact->code_postal); ?>" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="email" value="<?php echo esc($contact->email); ?>" required>
          </div>
          <div class="form-group">
            <label>Numéro de téléphone</label>
            <input class="form-control" type="text" name="numero_telephone" value="<?php echo esc($contact->numero_telephone); ?>" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
