<div><a href='{{route('peoples.create')}}'>Nuova persona</a></div>

<table>
    <tr>
        <th>ID</th>
        <th>Titolo</th>
    </tr>
@foreach ($peoples as $people)

    <tr>
        <td>{{ $people->id}}</td>
        <td><a href="{{ route('genres.edit', $people->id) }}">{{ $people->name }}</a></td>
        <td><a href="{{ route('genres.edit', $people->id) }}">{{ $people->surname }}</a></td>
        <td>
            <form action="{{ route('peoples.destroy', $people->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Cancella"/>
            </form>
    </tr>

@endforeach
</table>
