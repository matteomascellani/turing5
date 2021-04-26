<form action="/articles" method="POST">
@csrf
    Nome Prodotto: <input type="text" name="nome" value=""><br><br>
    Origine: <input type="text" name="origine" value=""><br><br>
    Quantità: <input type="text" name="quantità" value=""><br><br>
    Prezzo: <input type="text" name="prezzo" value=""><br><br>
    Descrizione: <input type="text" name="descrizione" value=""><br><br>
    <input type="submit" value="Salva">
</form>
