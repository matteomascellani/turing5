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
                        <div class="card-header"  style="background-color: rgb(126, 250, 147)">
                            <div>
                                <h3>
                                    Stai cercando l'autore : {{ucfirst($search)}}
                                </h3>
                            </div>

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
                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center">Non trovato</td>
                                 </tr>
                                </tbody>
                            </table>
                        </div>

                            <div class="card-footer">
                                <form action="{{route('authors.create')}}" method="get">
                                    @csrf
                                    <input type="submit" class="btn btn-success" value="new author">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</x-app-layout>
