
<body style="background-color: beige">
    <h2>Dettaglio articolo</h2>
    <p>Questo articolo <strong> {{$items->nome}}</strong>  proviene da <strong> {{$items->origine}} </strong>. <br>è stato ordinato una quantita
    pari a {{$items->quantita}} ad un prezzo di {{$items->prezzo}}. <br> La descrizione del prodotto è la seguente:
    <i style="color: rgb(214, 70, 82)">{{$items->descrizione}}</i></p>
    <a href="/articles">Pagina Articoli</a>
</body>

