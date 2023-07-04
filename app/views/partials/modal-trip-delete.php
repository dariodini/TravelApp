<div class="modal fade" id="tripDelete" aria-labelledby="tripDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tripDeleteLabel">Conferma eliminazione</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Confermi di voler eliminare il viaggio con destinazione a <strong><span id="countryName"></span></strong> con <strong><span id="availableSeats"></span></strong> posti?
                <form action="/trip" method="POST">
                    <input type="hidden" name="action" value="">
                    <input type="hidden" name="tripId" value="">
                    <div class="text-end mt-3">
                        <button type="button" class="btn btn-secondary submitButton" data-bs-dismiss="modal">Chiudi</button>
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
