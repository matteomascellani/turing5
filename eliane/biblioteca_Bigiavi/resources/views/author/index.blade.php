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

        <style>

        </style>
    </head>

    <body>
        <div>
            @if (Str::length(session('target')) > 0)
                @if (session('count') == 0)

                    <div class="alert alert-success " style="color: rgb(13, 97, 13)">

                        <u>MESSAGE </u>: <strong style="font-size: 25px"> {{ session('target') }}</strong> è stato
                        creato correttemente!!!!
                    </div>
                @else
                    <div class="alert alert-danger">
                        <u> Attenzione</u>: <strong style="font-size: 25px">{{ session('target') }}</strong> esiste
                        già!!!!!!!!
                    </div>
                @endif
            @endif
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card">
                        <div class="card-header">
                            <h2>
                                elenco Authors
                        </div>
                        <div class="card-body">
                            <table class="table table-striper table-hover">
                                <thead>
                                    <th>Codice</th>
                                    <th>Nome</th>
                                    <th>Cognome</th>
                                    <th>Nazione</th>
                                    <th>Books</th>
                                    <th>Email</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)

                                        <tr>
                                           <td>{{ strtoupper($item->codice) }}</td>
                                           <td><a href="/authors/{{$item->id}}/edit">{{ Str::ucfirst ($item->nome)}}</a></td>
                                           <td><a href="/authors/{{$item->id}}/edit">{{ Str::ucfirst($item->cognome)}}</a></td>
                                           <td>{{ Str::ucfirst($item->country->state)}}</td>
                                           <td><a href="/authors/{{$item}}/books">Lista libri</a></td>
                                           <td>{{$item->email}}</td>
                                            <td>
                                                <form action="{{ route('authors.show', $item->id) }}" method="get">
                                                    @csrf

                                                    <input type="submit" value="read" class="button btn-info">
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('authors.destroy', $item->id) }}" method="POST">
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

                            <div class="card-footer">
                                <form action="{{route('authors.create')}}" method="get">
                                    @csrf
                                    <input type="submit" class="button btn-success" value="new author">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</x-app-layout>
