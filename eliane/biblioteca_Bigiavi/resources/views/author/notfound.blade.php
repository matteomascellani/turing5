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
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card">
                        <div class="card-header"  style="background-color: beige">
                            <div>
                                <h3>
                                    Stai cercando l'autore : {{ucfirst($search)}}
                                </h3>
                            </div>

                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
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
                                 <tr style="background-color: rgb(248, 215, 215)">
                                    <td colspan="8" style="text-align: center"><em style="font-size: 20px"> Autore Non trovato !!!!!!</em></td>
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
