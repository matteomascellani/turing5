@livewireStyles

<div>
    <a href="{{ route('movies.create') }}">Nuovo film</a>
</div>

<table>

    <tr>
        <th>Id</th>
        <th>Titolo</th>
        <th>Genere</th>
        <th>Durata</th>
        <th>Data creazione</th>
    </tr>

    @foreach ($movies as $movie)

        <tr>
            <td>{{ $movie->id }}</td>
            <td><a href="{{ route('movies.edit', $movie->id) }}">{{ $movie->title }}</a></td>
            <td>{{ $movie->genre->title }}</td>
            <td>{{ $movie->minutes }}</td>
            <td>{{ $movie->formatted_created_at }}</td>
            <td>
                <form action={{ route('movies.destroy', $movie->id) }} method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Cancella">
                </form>
            </td>
        </tr>

    @endforeach

</table>

<livewire:meteo />

@livewireScripts
