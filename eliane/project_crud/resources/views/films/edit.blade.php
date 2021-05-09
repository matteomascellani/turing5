
<body style="background-color: bisque">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('films.update', $film->id) }}" method="post" >
        @csrf
        @method('PUT')
            Titolo Film: <input type="text" name="film[titolo]" value="{{$film->titolo}}">
            Categoria: <input type="text" name="film[categoria]" value="{{$film->categoria}}">
            Tipologia: <input type="text" name="film[tipologia]" value="{{$film->tipologia}}">
            Anno: <input type="text" name="film[anno]" value="{{$film->anno}}">
            <input type="submit" value="Salva Modifica">
        </form>

</body>

