

<body>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="modal fade" id="addLanguageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

          <div class="modal-content">

            <div class="modal-header">

              <h5 class="modal-title" id="exampleModalLabel">Nuova lingua</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>

            <div class="modal-body">

              <form action="{{route('languages.store')}}" method="post" id="add">
                @csrf
                  <div class="form-group">
                    <label for="titolo">inserisci lingua</label>
                    <input type="text" name="language[name]" class="form-control" placeholder="lingua"/>
                  </div>

                  <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                    <button type="submit" class="btn btn-primary" form="add">Aggiungi lingua</button>
                  </div>
              </form>

            </div>



          </div>

        </div>
      </div>


</body>

