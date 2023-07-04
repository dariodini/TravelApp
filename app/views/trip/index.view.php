<?php require(__DIR__ . '/../partials/head.php'); ?>

<h2>Lista viaggi</h2>

<?php use App\Entities\Country; ?>
<?php if(count($trips)>0) { ?>
  <table class="table table-striped table-hover border">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Paese</th>
        <th scope="col">Posti disponibili</th>
        <th scope="col">Modifica</th>
        <th scope="col">Elimina</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($trips as $trip): ?>
        <tr>
          <td><?= $trip->id ?></td>
          <td><?= Country::getName($trip->country_id) ?></td>
          <td><?= $trip->available_seats ?></td>
          <td>
            <a href="" data-bs-toggle="modal" data-bs-target="#countryForm">
              <i class="fa fa-edit" aria-hidden="true" data-country-id="<?php echo $trip->id; ?>"></i>
            </a>
          </td>
          <td>
            <a href="" data-bs-toggle="modal" data-bs-target="#countryDelete">
              <i class="fa fa-trash" aria-hidden="true" data-country-id="<?php echo $trip->id; ?>"></i>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php } ?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#countryForm">Aggiungi un nuovo viaggio</button>

<?php require(__DIR__ . '/../partials/footer-scripts.php'); ?>
