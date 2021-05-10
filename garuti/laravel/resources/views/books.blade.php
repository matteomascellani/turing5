<h3>Lista dei Libri </h3>


<table>
    @foreach ($items as $item)

    <tr>
        <td>{{$item -> name}}</td>
        <td>{{$item -> author}}</td>
        <td>{{$item -> pages}}</td>
        <td>
            <form action="/books/{{$item->id}}/edit">
                <button type="submit">Modifica</button>
            </form>
        </td>
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
<br /><br />
<form action="/books/create">
    <button type="submit">Aggiungi Libro</button>
</form>

