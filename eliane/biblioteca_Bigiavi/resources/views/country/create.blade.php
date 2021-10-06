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


    <div class="modal fade" id="addCountryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

          <div class="modal-content">

            <div class="modal-header">

              <h5 class="modal-title" id="exampleModalLabel">New Country</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>

            <div class="modal-body">

              <form action="{{route('countries.store')}}" method="post" id="add">
                @csrf
                <div class="form-group">
                    <label for="titolo">inserisci codice</label>
                    <input type="text" name="country[code]" class="form-control" placeholder="IT"/>
                  </div>
                  <div class="form-group">
                    <label for="titolo">inserisci country</label>
                    <input type="text" name="country[state]" class="form-control" placeholder="ITALIA"/>
                  </div>

                  <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
                    <button type="submit" class="btn btn-primary" form="add">Salva</button>
                  </div>
              </form>

            </div>

          </div>

        </div>
      </div>


</body>



