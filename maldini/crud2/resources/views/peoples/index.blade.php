<div><a href='{{route('peoples.create')}}'>Nuova persona</a></div>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cognome</th>
    </tr>
@foreach ($peoples as $people)

    <tr>
        <td>{{ $people->id}}</td>
        <td>{{ $people->name }}</td>
        <td><a href="{{ route('peoples.edit', $people->id) }}">{{ $people->surname }}</a></td>
        <td>
            <form action="{{ route('peoples.destroy', $people->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Cancella"/>
            </form>
    </tr>

@endforeach
</table>
