<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <head>

    </head>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">

                    <div class="card-header">
                        <h3> New Author</h3>
                    </div>

                    <form action="{{route('authors.store')}}" method="post">
                    @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="codice"> inserire codice</label>
                                <input type="text" name="author[codice]" class="form-control" placeholder="codice" />
                            </div>

                            <div class="form-group">
                                <label for="nome"> inserire Nome</label>
                                <input type="text" name="author[nome]" class="form-control" placeholder="Nome"/>
                            </div>

                            <div class="form-group">
                                <label for="cognome">Inserire Cognome</label>
                                <input type="text" name="author[cognome]" class="form-control" placeholder="Cognome"/>
                            </div>

                            <div class="form-group">
                                <label for="country_id">Inserire Nazione</label>

                                <select name="author[country_id]" class="form-control">
                                    <option value="0"> ---country--- </option>
                                    @foreach ($country as $item)

                                        <option value="{{$item->id}}">
                                           {{$item->state}}
                                        </option>

                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="email"> Inserire Email</label>
                                <div class="input-group">
                                    <input class="form-control" type="text" name="author[email]" placeholder="email" aria-label="Recipient's " aria-describedby="my-addon">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="my-addon">@example.com</span>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary"  href="{{route("authors.index")}}">indietro</a>
                            <button type="submit" value="Salva" class="btn btn-primary">salva</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
