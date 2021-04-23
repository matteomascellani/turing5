<html>
    <h1>lista dei libri</h1>
<ul>
@foreach ($livres as $livre)
    <li>{{$livre->titolo}} ----->{{$livre->author}}---->{{{$livre->pages}}}</li>

@endforeach
</ul>
</html>
