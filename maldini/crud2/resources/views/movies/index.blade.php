<div><a href='{{route('movies.create')}}'>Nuovo film</a></div>

<table>
    <tr>
        <th>ID</th>
        <th>Titolo</th>
        <th>Genere</th>
        <th>Durata</th>
    </tr>
@foreach ($movies as $movie)

    <tr>
        <td>{{ $movie->id}}</td>
        <td><a href="{{ route('movies.edit', $movie->id) }}">{{ $movie->title }}</a></td>
        <td>{{ $movie->genre->title }}</a></td>
        <td>{{ $movie->minutes }}</a></td>
        <td>
            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Cancella"/>
            </form>
    </tr>

@endforeach
</table>
