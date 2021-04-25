<html>
    <h1>lista dei libri</h1>
<ul>
@foreach ($livres as $livre)
    <li><i><strong><a href="/books/{{$livre->id}}/edit">{{$livre->titolo}} </a></strong> ----->{{$livre->author}}---->{{$livre->pages}}</i></li>

@endforeach
</ul>
</html>
<a href="/books/create">NUOVO LIBRO</a>
