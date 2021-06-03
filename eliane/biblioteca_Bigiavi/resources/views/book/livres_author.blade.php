<x-app-layout>
    <x-slot name="">

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
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-12">
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="card" style="width: 100%">
                                    <div class="card-header">
                                        <h2> libri :{{$author->cognome}} {{$author->cognome}}</h2>
                                    </div>
                                    <div class="card-body">

                                        <table class="table table-striped table-hover">
                                           <thead>
                                                <th>Titolo</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Editor</th>
                                                <th>Lingua</th>
                                                <th>Stato</th>
                                                <th>Pages</th>
                                                <th>Peso(g)</th>
                                                <th>Dimensioni(cm)</th>
                                                <th>Anno Pubblicazioni</th>

                                           </thead>
                                           <tbody>
                                               @foreach ($items as $item)

                                               <tr>
                                                   <td>{{Str::upper($item->titolo) }}</td>
                                                   <td>{{Str::ucfirst($item->category->nome) }}</td>
                                                   <td>{{ Str::ucfirst($item->author->cognome)}} {{Str::ucfirst($item->author->nome)}}</td>
                                                   <td>{{Str::ucfirst($item->editor)}}</td>
                                                   <td>{{Str::ucfirst($item->language_id)}}</td>
                                                   <td>{{$item->stato}}</td>
                                                   <td>{{$item->pages}}</td>
                                                   <td>{{$item->peso}}</td>
                                                   <td>{{$item->dimensioni}}</td>
                                                   <td>{{$item->anno}}</td>
                                               @endforeach
                                           </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </body>


</x-app-layout>
