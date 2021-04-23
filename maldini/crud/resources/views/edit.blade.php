<form method="post" action="/musics/{{$item->id}}">
@csrf
@method('PUT')
Nome: <input type="text" name="name" value="{{ $item->name }}" /><br />
Compositore: <input type="text" name="composer" value="{{ $item->composer }}" /><br />
Data: <input type="text" name="date" value="{{ $item->date }}" /><br />
<input type="submit" value="Salva" />
</form>

<a href="/musics">Indietro</a>
