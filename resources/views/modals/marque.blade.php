<!-- Modal -->
<div class="modal fade" id="marqueModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ajout d'une marque</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('addMarque') }}">
          @csrf
          <div class="form-group">
            <label for="marque_libelle">Nom de la marque</label>
            <input type="text" name="libelle" class="form-control" id="marque_libelle">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="submit_marque">Enregistrer</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>