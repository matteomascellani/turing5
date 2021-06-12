<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prestiti Bibliotecari') }}
        </h2>
    </x-slot>
    <head>
        <title>Homepage Biblioteca BIGIAVI</title>
    </head>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card" style="background-color: rgb(231, 226, 226)">
                    <div class="card-header" style="background-color: rgb(88, 87, 87))">
                        Header
                    </div>
                    <div class="card-body">
                        <form action="{{route('subscribers.store')}}" method="post" id="create">
                            @csrf

                            <div class="form-group">
                              <label for="nome">Nome Abonnato</label>
                              <input type="text" name="loan[subscriber_id]" id="" class="form-control border-2 border-grey" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="cognome">Titolo Libro</label>
                                <input type="text" name="loan[book_id]" id="" class="form-control border-2 border-grey" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="indirizzo">Indirizzo</label>
                                <input type="text" name="loan[data_prestito]" id="" class="form-control border-2 border-grey" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="cap">Cap</label>
                                <input type="text" name="loan[data_scadenza]" id="" class="form-control border-2 border-grey" placeholder="" aria-describedby="helpId">
                            </div>

                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" form="create" class="btn btn-info">Invia richiesta</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
