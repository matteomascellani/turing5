<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>
        @include('country.create')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card">
                        <div class="card-header">
                            <h2>
                                elenco country
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#addCountryModal">aggiungi country</button>
                            </h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            CODE
                                        </th>
                                        <th>
                                            NOME
                                        </th>
                                        <th>
                                            DETAILS
                                        </th>
                                        <th>
                                            ACTION
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)

                                        <tr>
                                            <td>
                                                <a href="/countries/{{$item->id}}/edit"> {{ strtoupper($item->code) }} </a>
                                            </td>
                                            <td>
                                                <a href="/countries/{{$item->id}}/edit"> {{ strtoupper($item->state) }} </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('countries.show', $item->id) }}" method="get">
                                                    @csrf

                                                    <input type="submit" value="read" class="button btn-info">
                                                </form>
                                            </td>
                                            <td>
                                                <form action="/countries/{{ $item->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="button btn-danger" value="cancella">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>


</x-app-layout>
