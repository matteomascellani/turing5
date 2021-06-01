<x-app-layout>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card">
                        <div class="card">
                            <div class="card-header">
                                <h2>Modifica book</h2>
                            </div>
                            <form action="{{route('books.store')}}" method="post">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Inserisci Titolo</label>
                                        <input type="text" name="book[titolo]" class="form-control"  value="{{$book->titolo}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Inserisci Categoria</label>
                                        <select name="book[category_id]" class="form-control" >

                                            <option value="0">-- seleziona Categoria -- </option>
                                            @foreach ($category as $row)

                                                <option value="{{ $row->id }}">{{ Str::ucfirst($row->nome)  }}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Inserisci Author</label>
                                        <select name="book[author_id]"  class="form-control">
                                            <option value="0">-- seleziona autore -- </option>
                                            @foreach ($author as $row)
                                                <option value="{{ $row->id }}">{{Str::ucfirst($row->cognome) }} {{ Str::ucfirst($row->nome)  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Inserisci Editore</label>
                                        <input type="text" name="book[editor]" class="form-control"  value="{{$book->editor}}" />
                                    </div>

                                    <div class="form-group">
                                        <label for="">Inserisci lingua libro</label>
                                        <select name="book[language_id]"  class="form-control">
                                            <option value="0">-- seleziona lingua -- </option>
                                            @foreach ($language as $row)
                                                <option value="{{ $row->id }}">{{Str::ucfirst($row->name) }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Stato Libro</label>
                                        <select name="book[stato]" class="form-control">
                                           <option value="scelta">--Scelgli Stato-----</option>
                                           <option value="nuovo">NUOVO</option>
                                           <option value="vecchio">VECCHIO</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">N° Pagine</label>
                                        <input type="text" name="book[pages]" class="form-control"  value="{{$book->pages}}"/>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Inserisci peso (g)</label>
                                        <input type="text" name="book[peso]" class="form-control"  value="{{$book->peso}}" />
                                    </div>

                                    <div class="form-group">
                                        <label for="">Inserisci Dimensioni</label>
                                        <input type="text" name="book[dimensioni]" class="form-control"  value="{{$book->dimensioni}}"/>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Anno Publicazione</label>
                                        <input type="text" name="book[peso]" class="form-control"  value="{{$book->peso}}"/>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <input type="submit" value="Salva modifica" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </body>
</x-app-layout>
