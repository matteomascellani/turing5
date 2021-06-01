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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">

                    <div class="card-header">
                        <h3> Modifica Author</h3>
                    </div>

                    <form action="{{ route('authors.update', $author->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="codice"> inserire codice</label>
                                <input type="text" name="author[codice]" class="form-control" value="{{ $author->codice }}" />
                            </div>

                            <div class="form-group">
                                <label for="nome"> inserire Nome</label>
                                <input type="text" name="author[nome]" class="form-control" value="{{ $author->nome }}" />
                            </div>

                            <div class="form-group">
                                <label for="cognome">Inserire Cognome</label>
                                <input type="text" name="author[cognome]" class="form-control" value="{{ $author->cognome }}" />
                            </div>

                            <div class="form-group">
                                <label for="country_id">Inserire Nazione</label>

                                <select name="author[country_id]" class="form-control">
                                    @foreach ($country as $item)

                                        <option value="{{ $item->id }}">
                                            {{ $item->state }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="email"> Inserire Email</label>
                                <div class="input-group">
                                    <input class="form-control" type="text" name="author[email]" value="{{$author->email}}"/>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="my-addon">@example.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" value="Salva" class="btn btn-primary">salva modifiche</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
