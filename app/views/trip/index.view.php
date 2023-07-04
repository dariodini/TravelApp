<?php require(__DIR__ . '/../partials/head.php'); ?>

<h2>Lista viaggi</h2>

<?php use App\Entities\Country; ?>

<h3>Filtri</h3>
<form action="/trip" method="GET" id="filterForm" class="mb-3">
  <div class="row gx-2">
    <div class="col-4">
      <input type="text" class="form-control" name="countryName" placeholder="Nome del paese" value="<?= isset($selectedCountryName) ? htmlspecialchars($selectedCountryName) : '' ?>">
    </div>
    <div class="col-4">
      <input type="number" class="form-control" name="availableSeats" placeholder="Numero posti disponibili" value="<?= isset($selectedAvailableSeats) ? htmlspecialchars($selectedAvailableSeats) : '' ?>">
    </div>
    <div class="col-2">
      <button type="submit" class="btn btn-primary w-100">Filtra</button>
    </div>
    <div class="col-2">
      <button type="reset" class="btn btn-danger w-100">Azzera</button>
    </div>
  </div>
</form>

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
            <a href="" data-bs-toggle="modal" data-bs-target="#tripForm">
              <i class="fa fa-edit" aria-hidden="true" data-trip-id="<?php echo $trip->id; ?>"></i>
            </a>
          </td>
          <td>
            <a href="" data-bs-toggle="modal" data-bs-target="#tripDelete">
              <i class="fa fa-trash" aria-hidden="true" data-trip-id="<?php echo $trip->id; ?>"></i>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php } else{ ?>
  <div class="alert bg-warning">Non è presente alcun risultato</div>
<?php } ?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tripForm">Aggiungi un nuovo viaggio</button>

<?php require(__DIR__ . '/../partials/modal-trip-form.php'); ?>
<?php require(__DIR__ . '/../partials/modal-trip-delete.php'); ?>


<script>
  $(document).ready(function() {
    const modal = $('#tripForm');
    const form = modal.find('form');

    const deleteModal = $('#tripDelete');
    const deleteForm = deleteModal.find('form');

    const filterForm = $('#filterForm');

    $('.fa-edit').click(function(e){
      const tripId = $(this).data('trip-id');
      const countrySelected = $(this).closest('tr').find('td:nth-child(2)').text();
      const availableSeats = $(this).closest('tr').find('td:nth-child(3)').text();

      form.find('input[name="action"]').val('edit');
      form.find('input[name="tripId"]').val(tripId);
      form.find(`option:contains(${countrySelected})`).attr("selected", "selected");
      form.find('input[name="tripSeats"]').val(availableSeats);
    });

    $('.fa-trash').click(function(e){
      const tripId = $(this).data('trip-id');
      const countrySelected = $(this).closest('tr').find('td:nth-child(2)').text();
      const availableSeats = $(this).closest('tr').find('td:nth-child(3)').text();

      deleteForm.find('input[name="action"]').val('delete');
      deleteForm.find('input[name="tripId"]').val(tripId);
      $('#countryName').text(countrySelected);
      $('#availableSeats').text(availableSeats);
    })

    modal.on('hidden.bs.modal', function() {
      form.find('input[name="tripCountry"]').val('');
      form.find('option[selected="selected"]').removeAttr('selected');
      form.find('input[name="tripSeats"]').val('');
    });

    filterForm.on('reset', function(){
      document.location.href = '/trip'
    })
  });
</script>
<?php require(__DIR__ . '/../partials/footer-scripts.php'); ?>
