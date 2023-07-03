<?php require(__DIR__ . '/../partials/head.php'); ?>

<h2>Lista paesi</h2>

<?php if(count($countries)>0) { ?>
  <table class="table table-striped table-hover border">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Modifica</th>
        <th scope="col">Elimina</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($countries as $country): ?>
        <tr>
          <td><?= $country->id ?></td>
          <td><?= $country->name ?></td>
          <td>
            <a href="" data-bs-toggle="modal" data-bs-target="#countryForm">
              <i class="fa fa-edit" aria-hidden="true" data-country-id="<?php echo $country->id; ?>"></i>
            </a>
          </td>
          <td>
            <a href="" data-bs-toggle="modal" data-bs-target="#countryDelete">
              <i class="fa fa-trash" aria-hidden="true" data-country-id="<?php echo $country->id; ?>"></i>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php } ?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#countryForm">Aggiungi un nuovo paese</button>


<?php require(__DIR__ . '/../partials/footer-scripts.php'); ?>

