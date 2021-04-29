<form method="post" action="/books">
    @csrf
    Nome Latino: <input type="text" name="latin_name" value="" /><br />
    Nome comune: <input type="text" name="name" value="" /><br />
    Gambe: <input type="text" name="legs" value="" /><br />
    <input type="submit" value=" Salva " />
    </form>


    <a href="/books">Indietro</a>
