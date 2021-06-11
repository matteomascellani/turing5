<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <head>
        <title>Homepage Biblioteca BIGIAVI</title>
    </head>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card" style="background-color: rgb(165, 243, 213)">
                    <div class="card-header" style="background-color: rgb(167, 230, 167)">
                        Header
                    </div>
                    <div class="card-body">
                        <form action="{{route('subscribers.store')}}" method="post" id="create">
                            @csrf

                            <div class="form-group">
                              <label for="nome">Nome Abonnato</label>
                              <input type="text" name="loan[subscriber_id]" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="cognome">Titolo Libro</label>
                                <input type="text" name="loan[book_id]" id="" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="indirizzo">Indirizzo</label>
                                <input type="text" name="loan[data_prestito]" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="cap">Cap</label>
                                <input type="text" name="loan[data_scadenza]" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>

                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" form="create" class="btn btn-success">Salva</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
