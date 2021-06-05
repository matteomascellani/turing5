<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <head>

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
                                <div class="float-left">
                                    <h3>
                                        Stai cercando l'autore : " {{ucfirst($search)}} ""
                                    </h3>
                                </div>
                                <div class="float-right">
                                    <form action="/authors" method="GET">
                                        @csrf
                                        <input type="submit" class="btn btn-primary" value="Nuova ricerca">
                                    </form>

                                </div>

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
