<h3>Lista di animali</h3>

<a href="/animals/create">Nuovo</a>
<br /><br /><br />
<table>
@foreach($items as $item)
<tr><td><a href="/animals/{{$item->id}}/edit">{{ $item->name }}</a></td>
    <td>{{ $item->$latin_name }}</td>
    <td>{{ $item->$name }}</td>
    <td>{{ $item->$legs }}</td>
    <td>
        <form method="post" action="/animals/{{$item->id}}">
            @csrf
            @method('DELETE')
            <button type="submit">Cancella</button>
        </form>

    </td>
</tr>
@endforeach
</table>
