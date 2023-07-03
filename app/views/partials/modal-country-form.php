<div class="modal fade" id="countryForm" aria-labelledby="countryFormLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="countryFormLabel">Aggiungi un paese</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/country" method="POST">
                    <input type="hidden" name="action" value="">
                    <input type="hidden" name="countryId" value="">
                    <label for="countryName" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="countryName" autofocus required>
                    <div class="text-end mt-3">
                        <button type="button" class="btn btn-secondary submitButton" data-bs-dismiss="modal">Chiudi</button>
                        <button type="submit" class="btn btn-primary">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
