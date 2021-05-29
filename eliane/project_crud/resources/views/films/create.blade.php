<html>

<head>
    <style>
            button{
                background-color: rgb(240, 134, 134);
            }
    </style>

</head>

<body style="background-color:rgb(141, 177, 141)">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="addFilmModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">new film</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('films.store') }}" method="POST" id="crea">
                        @csrf
                        <div class="form-group">
                            <label for="titolo">titolo</label>
                            <input type="text" name="film[titolo]" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="categorie">categorie</label>
                            <input type="text" name="film[categoria]" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="tipologie">tipologie</label>
                            <input type="text" name="film[tipologia]" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="anno">anno</label>
                            <input type="text" name="film[anno]" class="form-control" />
                        </div>
                        <div>
                            <button type="submit" value="create" form="crea" class="btn btn-primary">create</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
    </div>



</body>



</html>
