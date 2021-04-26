<html>
    <h1>lista dei libri</h1>
<th> titolo</th><th>Auteur</th><th>pages</th><br/>
<ul>
@foreach ($livres as $livre)
    <li>{{$livre->titolo}} ----->{{$livre->author}}---->{{{$livre->pages}}}</li>

@endforeach
</ul>
</html>
