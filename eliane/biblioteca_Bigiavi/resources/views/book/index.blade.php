<x-app-layout>
    <x-slot name="">

    </x-slot>

    <head>

        <title>Homepage Books</title>
        <style>

        </style>

    </head>

    <body>
        <div>
            @if (strlen(session('target')) > 0)
                @if (session('count') == 0)
                    <div class="alert alert-success " style="color: rgb(13, 97, 13)">

                        <u>MESSAGE </u>: <strong style="font-size: 25px">
                            {{ strtoupper(session('target')) }}</strong> è stato
                        creato correttemente!!!!
                    </div>
                @else
                    <div class="alert alert-danger">
                        <u> Attenzione</u>: <strong
                            style="font-size: 25px">{{ strtoupper(session('target')) }}</strong> esiste
                        già!!!!!!!!
                    </div>
                @endif

            @endif
        </div>
        <div>
            @if (session('update'))
                <div class="alert alert-success">{{ session('update') }}</div>
            @endif
        </div>
        <div>
            @if (session('delete'))
                <div class="alert alert-success">{{ session('delete') }}</div>
            @endif
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card">
                        <div class="card-header">
                            <div style="float: left">
                                <h4 ><b class="underline" style="color: blue ;font-style: italic;font-family:georgia,sherif ; font-size:23px">Libri disponibili:</b>( {{ $allbooks }} libri) </h4>
                            </div>
                            <div style="float: right">
                                <form class="form-inline m-0 my-lg-0" method="GET" action="/searchBooks" id="searc">
                                    @csrf

                                    <input type="search" name="query" class="form-control rounded"
                                        placeholder="Search book" aria-label="Search" />
                                    <button type="submit" class="btn btn-primary" form="searc">search</button>
                                </form>
                            </div>

                        </div>


                        <div class="card-body">

                            <table class="table table-striped table-hover table-auto">
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
                                    <th>Details</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)

                                        <tr>
                                            <td>{{ Str::upper($item->titolo) }}</td>
                                            <td>{{ Str::ucfirst(!empty($item->category) ? $item->category->nome : '') }}</td>
                                            <td>{{ Str::ucfirst(!empty($item->author) ? $item->author->cognome : '') }}
                                                {{ Str::ucfirst(!empty($item->author) ? $item->author->nome : '') }}</td>
                                            <td>{{ Str::ucfirst($item->editor) }}</td>
                                            <td>{{ Str::ucfirst(!empty($item->language) ? $item->language->name : '') }}</td>
                                            <td>{{ $item->stato }}</td>
                                            <td>{{ $item->pages }}</td>
                                            <td>{{ $item->peso }}</td>
                                            <td>{{ $item->dimensioni }}</td>
                                            <td>{{ $item->anno }}</td>
                                            <td>
                                                <form action="" method="post">
                                                    <input type="submit" class="btn btn-info " value="read">
                                                </form>
                                            </td>
                                            <td>
                                                <form action="/books/{{ $item->id }}/edit" method="get">
                                                    @csrf

                                                    <input type="submit" value="edit" class="btn btn-info">
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ route('books.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger" value="delete">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                        <div class="card-footer">
                            <div style="float: left">
                                <form action="{{ route('books.create') }}" method="get">
                                    @csrf
                                    <input type="submit" value="new book" class="btn btn-primary">
                                </form>
                            </div>
                            <div style="float: right">
                                <h5><strong class="font-family: 'Times New Roman', Times, serif" style="color:rgb(85, 12, 85)" >Total Books:
                                        {{ $allbooks }}</strong></h5>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>


</x-app-layout>
