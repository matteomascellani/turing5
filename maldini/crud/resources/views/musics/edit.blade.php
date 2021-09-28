@if ($errors->any())
    <div class="alert alert-danger">
        Guarda che c'è un errore!
    </div>
@endif

<form method="post" action="{{ route('musics.update', $music->id) }}">

    @csrf
    @method('PUT')
    <div>
        <label>Nome</label>
        <input type="text" name="music[name]" value="{{ old('music.name',$music->name ?? '') }}" placeholde="Name" />
        <small>{{ $errors->first('music.name') ?? '' }}</small>
    </div>
    <div>
        <label>Compositore</label>
        <input type="text" name="music[composer]" value="{{ old('music.composer',$music->composer ?? '') }}" placeholde="Composer" />
        <small>{{ $errors->first('music.composer') ?? '' }}</small>
    </div>
    <div>
        <label>Data</label>
        <input type="text" name="music[date]" value="{{ old('music.date',$music->date ?? '') }}" placeholde="Date" />
        <small>{{ $errors->first('music.date') ?? '' }}</small>
    </div>
    <div><input type="submit" value=" Salva " />

</form>

<a href="/musics">Indietro</a>
