<!-- Modal -->
<div class="modal fade" id="modeleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ajout d'un moele</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('addModele') }}">
          @csrf
          <div class="form-group">
            <label for="modele_libelle">Nom du modele</label>
            <input type="text" name="libelle" class="form-control" id="modele_libelle">
          </div>
          <div class="form-group">
            <label for="modele_libelle">Selection marque</label>
            <select name="marque_id" class="custom-select">
              <option value="">-- Selectionner --</option>
              @foreach ($marques as $item)
                <option value="{{ $item->id }}">{{ $item->libelle }}</option>
              @endforeach
            </select>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Enregistrer</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>