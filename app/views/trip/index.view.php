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
            <a href="" data-bs-toggle="modal" data-bs-target="#tripForm">
              <i class="fa fa-edit" aria-hidden="true" data-trip-id="<?php echo $trip->id; ?>"></i>
            </a>
          </td>
          <td>
            <a href="" data-bs-toggle="modal" data-bs-target="#countryDelete">
              <i class="fa fa-trash" aria-hidden="true" data-trip-id="<?php echo $trip->id; ?>"></i>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php } ?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tripForm">Aggiungi un nuovo viaggio</button>

<?php require(__DIR__ . '/../partials/modal-trip-form.php'); ?>


<script>
  $(document).ready(function() {
    const modal = $('#tripForm');
    const form = modal.find('form');

    $('.fa-edit').click(function(e){
      const tripId = $(this).data('trip-id');
      const countrySelected = $(this).closest('tr').find('td:nth-child(2)').text();
      const availableSeats = $(this).closest('tr').find('td:nth-child(3)').text();

      form.find('input[name="action"]').val('edit');
      form.find('input[name="tripId"]').val(tripId);
      form.find(`option:contains(${countrySelected})`).attr("selected", "selected");
      form.find('input[name="tripSeats"]').val(availableSeats);
    });

    modal.on('hidden.bs.modal', function() {
      form.find('input[name="tripCountry"]').val('');
      form.find('option[selected="selected"]').removeAttr('selected');
      form.find('input[name="tripSeats"]').val('');
    });
  });
</script>
<?php require(__DIR__ . '/../partials/footer-scripts.php'); ?>
