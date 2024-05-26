<!doctype html>
<html lang="en">
<head>
  <?= view('includes/header'); ?>
  <title>Codeigniter 4 CRUD Application</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3"><strong>Liste Des Contactes</strong></h2>
      </div>
      <div class="col-lg-12">
        <?php if (session()->getFlashdata('message')): ?>
          <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
        <?php endif; ?>
        <div class="d-flex justify-content-between mb-3">
          <h4></h4>
          <a href='/personnes/ajouter'  class="btn btn-success"><i class="fas fa-plus"></i> Crée un nouveau contact</a>
        </div>
        <table class="table table-bordered table-default">
          <thead class="thead-light">
            <tr>
              <th width="2%">ID</th>
              <th width="25%">Nom</th>
              <th width="25%">Prénom</th>
              <th width="48%">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; foreach ($personnes as $personne): ?>
              <tr>
                <td><?= $i ?></td>
                <td><?= esc($personne->nom) ?></td>
                <td><?= esc($personne->prenom) ?></td>
                <td>
                  <a href="<?= base_url('personnes/modifier/' . $personne->id) ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Modifier</a>
                  <a href="<?= base_url('personnes/detail/' . $personne->id) ?>" class="btn btn-success"><i class="fas fa-eye"></i> Voir</a>
                  <a href="<?= base_url('personnes/confirmer_suppression/' . $personne->id) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fas fa-trash"></i> Supprimer</a>
                </td>
              </tr>
              <?php $i++; endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <?= view('includes/footer'); ?>
</body>
</html>
