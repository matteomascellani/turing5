<form action="/books/{{$livres->id}}" method="post">
@csrf
@method('PUT')
    Titolo: <input type="text" name="titolo" value="{{$livres->titolo}}"><br><br>
    Autore: <input type="text" name="author" value="{{$livres->author}}"><br><br>
    Pagine: <input type="text" name="pages" value="{{$livres->pages}}"><br><br>
    <input type="submit" value="conferma modificare">

</form>
<a href="/books">indietro</a>

