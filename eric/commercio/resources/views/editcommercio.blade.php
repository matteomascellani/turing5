<body style="background-color: coral">
    <form action="/articles/{{$items->id}}" method="POST">
        @csrf
        @method('PUT')
            Nome Prodotto: <input type="text" name="nome" value="{{$items->nome}}"><br><br>
            Origine: <input type="text" name="origine" value="{{$items->origine}}"><br><br>
            Quantità: <input type="text" name="quantità" value="{{$items->quantità}}"><br><br>
            Prezzo: <input type="text" name="prezzo" value="{{$items->prezzo}}"><br><br>
            Descrizione: <input type="text" name="descrizione" value="{{$items->descrizione}}"><br><br>
            <input type="submit" value="Salva Modifiche">
        </form>
        <a href="/articles">Pagina iniziale</a>
</body>

