<x-app-layout>
    <x-slot name="header">


    </x-slot>

    <head>

        <title>homepage Authors</title>

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
        <div>
            @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif
        </div>
        <div>
            @if (session('delete'))
                <div class="alert alert-success">{{ session('delete') }}</div>
            @endif
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card">
                        <div class="card-header">

                            <div style="float: left">
                                <h2>
                                    elenco Authors
                                </h2>
                            </div>
                            <div style="float: right">
                                <form class="form-inline m-0 my-lg-0" method="GET" action="/search" id="searc">
                                    @csrf
                                    <label for="search">Inserire Nome Autore</label>
                                    <input type="search" name="query"  class="form-control rounded" placeholder="Search Author" aria-label="Search" />
                                  <button type="submit" class="btn btn-outline-primary" form="searc">search</button>
                                </form>
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
                                    @foreach ($items as $item)

                                        <tr>
                                           <td>{{ strtoupper($item->codice) }}</td>
                                           <td><a href="/authors/{{$item->id}}/edit">{{ Str::ucfirst ($item->nome)}}</a></td>
                                           <td><a href="/authors/{{$item->id}}/edit">{{ Str::ucfirst($item->cognome)}}</a></td>
                                           <td>{{ Str::ucfirst($item->country->state)}}</td>

                                           <td><a href="/authors/{{$item->id}}/books">Lista libri</a></td>
                                           <td>{{$item->email}}</td>
                                            <td>
                                                <form action="{{ route('authors.show', $item->id) }}" method="get">
                                                    @csrf

                                                    <input type="submit" value="read" class="btn btn-info">
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('authors.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger" value="cancella">
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
