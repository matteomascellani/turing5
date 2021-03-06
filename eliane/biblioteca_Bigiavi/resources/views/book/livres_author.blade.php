<x-app-layout>
    <x-slot name="">

    </x-slot>
    <head>


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
                                        <h2> Libri di: <b style="color: rgb(14, 37, 247)"> {{$author->cognome}} {{$author->cognome}} </b></h2>
                                        <h3>Numero Libri: <b style="color: black">{{$countlibro}} </b></h3>
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

                                    <div class="card-footer">
                                        <a href="{{route('authors.index')}}" class="btn btn-primary">Precedente</a>
                                    </div>


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
