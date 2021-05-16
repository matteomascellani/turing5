<html>
    <h1>lista dei libri</h1>
<ul>
@foreach ($livres as $livre)
    <li><i><strong><a href="/books/{{$livre->id}}/edit">{{$livre->titolo}} </a></strong> ----->{{$livre->author}}---->{{$livre->pages}}</i></li>
<form action="/books/{{$livre->id}}" method="POST">
@csrf
@method('DELETE')
    <input type="submit" value="cancella">
</form>
@endforeach
</ul>
</html>
<a href="/books/create">NUOVO LIBRO</a>
