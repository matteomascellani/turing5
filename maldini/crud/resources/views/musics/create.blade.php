@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('musics.store') }}">

    @csrf
    <div><label>Nome</label> <input type="text" name="music[name]" value="{{ old('music.name') }}" placeholde="Name" /></div>
    <div><label>Compositore</label> <input type="text" name="music[composer]" value="{{ old('music.composer') }}" placeholde="Composer" /></div>
    <div><label>Data</label> <input type="text" name="music[date]" value="{{ old('music.date') }}" placeholde="Date" /></div>
    <div><input type="submit" value=" Salva " />

</form>

<a href="/musics">Indietro</a>
