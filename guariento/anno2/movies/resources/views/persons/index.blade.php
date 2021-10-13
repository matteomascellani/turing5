<div>
    <a href="{{ route('persons.create') }}">Nuova persona</a>
</div>

<table>

    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Cognome</th>
    </tr>

    @foreach ($persons as $person)

        <tr>
            <td>{{ $person->id }}</td>
            <td>{{ $person->name }}</td>
            <td><a href="{{ route('persons.edit', $person->id) }}">{{ $person->surname }}</a></td>
            <td>
                <form action={{ route('persons.destroy', $person->id) }} method="post">

                    @csrf

                    @method('DELETE')

                    <input type="submit" value="Cancella">
                </form>
            </td>
        </tr>

    @endforeach

</table>
