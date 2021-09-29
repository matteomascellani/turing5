
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="addFilmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">new film</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
              <div class="form-group">
                  <label for="titolo">titolo</label>
                  <input type="text" name="titolo" class="form-control" wire:model="titolo"  />
              </div>
              <div class="form-group">
                <label for="categorie">categorie</label>
                <input type="text" name="categoria" class="form-control" wire:model="categorie" />
            </div>
            <div class="form-group">
                <label for="tipologie">tipologie</label>
                <input type="text" name="tipologia" class="form-control" wire:model="tipologia" />
            </div>
            <div class="form-group">
                <label for="anno">anno</label>
                <input type="text" name="anno" class="form-control" wire:model="anno" />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click.prevent="store()">Add film</button>

        </div>
      </div>
    </div>
  </div>
