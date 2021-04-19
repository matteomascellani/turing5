<h3>Lista dei libri</h3>

<a href="/books/create">Nuovo</a>
<br /><br /><br />
<table>
@foreach($items as $item)
<tr><td><a href="/books/{{$item->id}}/edit">{{ $item->name }}</a></td>
    <td>{{ $item->author }}</td>
    <td>{{ $item->pages }}</td>
    <td>
        <form method="post" action="/books/{{$item->id}}">
            @csrf
            @method('DELETE')
            <button type="submit">Cancella</button>
        </form>

    </td>
</tr>
@endforeach
</table>
