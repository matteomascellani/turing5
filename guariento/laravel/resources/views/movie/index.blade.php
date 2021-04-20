<h3>Lista dei films</h3>

<a href="/movies/create">Nuovo</a>
<br><br><br>
<table>
@foreach($movies as $movie)
<tr><td><a href="/movies/{{$movie->id}}/edit">4</a></td>
    <td>1</td>
    <td>2</td>
</tr>
@endforeach
</table>
