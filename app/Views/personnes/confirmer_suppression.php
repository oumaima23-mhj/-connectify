<!doctype html>
<html lang="en">
<head>
  <title>Confirm Delete</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3">Codeigniter 4 CRUD (Create-Read-Update-Delete) Application</h2>
      </div>
      <div class="col-lg-12">
        <h4>Are you sure you want to delete this contact?</h4>
        <div class="d-flex justify-content-between mb-3">
          <a href="<?= base_url('personnes/delete/' . $contact->id) ?>" class="btn btn-danger"><i class="fas fa-trash"></i> supprimer</a>
          <a href="<?= base_url('personnes') ?>" class="btn btn-secondary"><i class="fas fa-angle-left"></i> annulée</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
