<div>
    <a href="{{ route('genres.create') }}">Nuovo genere</a>
</div>

<table>

    <tr>
        <th>Id</th>
        <th>Titolo</th>
    </tr>

    @foreach ($genres as $genre)

        <tr>
            <td>{{ $genre->id }}</td>
            <td><a href="{{ route('genres.edit', $genre->id) }}">{{ $genre->title }}</a></td>
            <td>
                <form action={{ route('genres.destroy', $genre->id) }} method="post">

                    @csrf

                    @method('DELETE')

                    <input type="submit" value="Cancella">
                </form>
            </td>
        </tr>

    @endforeach

</table>
