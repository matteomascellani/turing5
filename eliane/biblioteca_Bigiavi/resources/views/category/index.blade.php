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
        @include('category.create')

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
                                elenco categorie
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#addCategorieModal">aggiungi category</button>
                            </h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-striper table-hover">
                                <thead>
                                    <th>
                                        Categoria
                                    </th>
                                    <th> details</th>
                                    <th>action</th>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)

                                        <tr>
                                            <td>

                                                <a href="/categories/{{ $item->id }}/edit">
                                                    {{ Str::ucfirst($item->nome) }}</a>

                                            </td>
                                            <td>
                                                <form action="{{ route('categories.show', $item->id) }}" method="get">
                                                    @csrf

                                                    <input type="submit" value="read" class="btn btn-info">
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('categories.destroy', $item->id) }}" method="POST">
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
                    </div>
                </div>
            </div>
        </div>
    </body>

</x-app-layout>
