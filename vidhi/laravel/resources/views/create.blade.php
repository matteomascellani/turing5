

<form method="post" action="/books">
@csrf
Nome: <input type="text" name="name" value="" /><br />
Autore: <input type="text" name="author" value="" /><br />
Pagine: <input type="text" name="pages" value="" /><br />
<input type="submit" value=" Salva " />
</form>


<a href="/books">Indietro</a>
