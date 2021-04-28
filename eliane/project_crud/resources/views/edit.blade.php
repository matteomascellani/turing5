
<body style="background-color: bisque">
    <form action="/films/{{$items->id}}" method="post" >
        @csrf
        @method('PUT')
            Titolo Film: <input type="text" name="titolo" value="{{$items->titolo}}">
            Categoria: <input type="text" name="categoria" value="{{$items->categoria}}">
            Tipologia: <input type="text" name="tipologia" value="{{$items->tipologia}}">
            Anno: <input type="text" name="anno" value="{{$items->anno}}">
            <input type="submit" value="Salva Modifica">
        </form>

</body>

