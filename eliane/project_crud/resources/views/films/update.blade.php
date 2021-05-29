
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('films') }}
        </h2>
    </x-slot>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        <div wire:ignore.self class="modal fade" id="updateFilmModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">modifica film</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <input type="hidden" name="film" >
                        <form action="" method="post" id="mod">
                            @csrf
                            @method('PUT')
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
                                <input type="text" name="film[tipologia]" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="anno">anno</label>
                                <input type="text" name="film[anno]" class="form-control "/>
                            </div>
                            <div>
                                <button type="submit" value="create" form="mod" class="btn btn-primary">salva modifica</button>
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
</x-app-layout>





