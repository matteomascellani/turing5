<form action="{{ isset($genre) ? route('genres.update', $genre->id) : route('genres.store') }}" method='post'>

@csrf

@if(isset($genre))
    @method('PUT')
@endif

<label>Nome</label>
<input type="text" id="title" name="genre[title]" value="{{ $genre->title ?? '' }}"/>

<input type="submit" value="Salva"/>

</form>

<a href="{{ route('genres.index') }}">Indietro</a>
