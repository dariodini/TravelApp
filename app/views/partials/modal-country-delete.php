<div class="modal fade" id="countryDelete" aria-labelledby="countryDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="countryDeleteLabel">Conferma eliminazione</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Confermi di voler eliminare il paese <span id="countryName"></span>?
                <form action="/country" method="POST">
                    <input type="hidden" name="action" value="">
                    <input type="hidden" name="countryId" value="">
                    <div class="text-end mt-3">
                        <button type="button" class="btn btn-secondary submitButton" data-bs-dismiss="modal">Chiudi</button>
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
