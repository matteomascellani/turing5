<h3>Musica</h3>

{{ $name }}

<a href="/musics/create">Nuovo</a>
<br /><br /><br />
<table>
@foreach($items as $item)
<tr><td><a href="/musics/{{ $item->id }}/edit">{{ $item->name }}</a></td>
    <td>{{ $item->composer }}</td>
    <td>{{ $item->date }}</td>
    <td>

        <form method="post" action="/musics/{{$item->$id}}">
            @csrf
            @method('DELETE')
            <button type="submit">Cancella</button>
        </form>

    </td>
</tr>

 @endforeach
</table>

