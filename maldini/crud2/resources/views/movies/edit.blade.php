<form action="{{ isset($movie) ? route('movies.update', $movie->id) : route('movies.store') }}" method="{{ isset($movie->id) ? 'get' : 'post'}}">

    @csrf
    @if(isset($movie))
        @method('PUT')
    @endif

    <div>
    <label>Titolo</label>
    <input type="text" id="name" name="movie[name]" value="{{ $movie->title ?? '' }}"/>
    </div>
    <div>
    <label>Genere</label>
    <select id="genre_id" name="movie[genre_id]">
    <option value="">-Seleziona genere-</option>
    @foreach ($genres as $k->$v)
    <option value="{{ $k }}"@if(isset($movie->genre_id) && $movie->genre_id == $k) selected="selected" @endif>{{ $v }}</option>
    @endforeach
    </select>
    </div>
    <div>
    <label>Minuti</label>
    <input type="text" id="minutes" name="movie[minutes]" value="{{ $movie->minutes ?? '' }}"/>
    </div>
    <div>
    <label>Trama</label>
    <textarea cols="50" rows="10" id="plot" name="movie[plot]">{{ $movie->plot ?? '' }}</textarea>
    </div>
    <input type="submit" value="Salva"/>

    </form>

    <a href="{{ route('movies.index') }}">Indietro</a>
