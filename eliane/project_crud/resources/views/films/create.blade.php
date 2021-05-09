<html>
<head></head>
    <body style="background-color:rgb(141, 177, 141)">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('films.store') }}" method="post" >
            @csrf
                Titolo Film: <input type="text" name="film[titolo]" value="">
                Categoria: <input type="text" name="film[categoria]" value="">
                Tipologia: <input type="text" name="film[tipologia]" value="">
                Anno: <input type="text" name="film[anno]" value="">
                <input type="submit" value="SALVA">
            </form>

    </body>

<a href="{{ route('films.index') }}">Indietro</a>
</html>
