<?php use App\Entities\Country; ?>

<div class="modal fade" id="tripForm" aria-labelledby="tripFormLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tripFormLabel">Aggiungi un viaggio</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/trip" method="POST">
                    <input type="hidden" name="action" value="">
                    <input type="hidden" name="tripId" value="">
                    <div class="mb-3">
                      <label for="tripCountry" class="form-label">Paese</label>
                      <select class="form-select" name="tripCountry" require>
                        <option disabled selected>Scegli un paese</option>
                        <?php foreach (Country::selectAll() as $country): ?>
                          <option value="<?= $country->id ?>"><?= $country->name; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="tripSeats" class="form-label">Posti disponibili</label>
                      <input type="number" class="form-control" name="tripSeats" required>
                    </div>
                    <div class="text-end mt-3">
                        <button type="button" class="btn btn-secondary submitButton" data-bs-dismiss="modal">Chiudi</button>
                        <button type="submit" class="btn btn-primary">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
