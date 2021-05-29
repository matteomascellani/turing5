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

    <body>
        @include('films.create')
        @include('films.update')
        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-12">

                    <section>
                        <div class="row">
                            <div class="card">
                                <div class="card-header">
                                    <h1>
                                        Tutti Films
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFilmModal">
                                            nuovo film
                                        </button>
                                    </h1>

                                </div>
                                <div class="card-body">

                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Titolo Film</th>
                                                <th>Categoria</th>
                                                <th>Tipologia</th>
                                                <th>Anno</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $item)
                                                <tr>
                                                    <td>{{ $item->titolo }}</td>
                                                    <td>{{ $item->categoria }}</td>
                                                    <td>{{ $item->tipologia }}</td>
                                                    <td>{{ $item->anno }}</td>
                                                    <td>
                                                            <button type="submit" class="button btn-info" data-toggle="modal" data-target="#updateFilmModal"  form="ed">edit</button>
                                                    </td>
                                                    <td>
                                                        <form action="/films/{{ $item->id }}">
                                                            @csrf
                                                        <input type="submit" value="Detagli">
                                                    </form>
                                                    </td>
                                                    <td>
                                                        <form action="/films/{{ $item->id }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="submit" value="Delete">
                                                        </form>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table><br><br>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </body>


</x-app-layout>
