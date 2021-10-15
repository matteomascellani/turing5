<form action="{{ isset($movie) ? route('movies.update', $movie->id) : route('movies.store') }}" method="post">

    @csrf

    @if (isset($movie))
        @method('PUT')
    @endif

    <div>

        <label>Titolo</label>

        <input type="text" id="title" name="movie[title]" value="{{ $movie->title ?? '' }}">

        @error('movie.title')
            {{ $message }}
        @enderror

    </div>

    <div>

        <label>Genere</label>

        <select id="genre_id" name="movie[genre_id]">

            <option value="">-Seleziona genere-</option>

            @foreach ($genres as $key => $value)
                <option value="{{ $key }}" @if (isset($movie->genre_id) && $movie->genre_id == $key) selected='selected' @endif>{{ $value }}</option>
            @endforeach

        </select>

    </div>

    <div>

        <label>Minuti</label>

        <input type="text" id="minutes" name="movie[minutes]" value="{{ $movie->minutes ?? '' }}">

        @error('movie.minutes')
            {{ $message }}
        @enderror

    </div>


    <div>
        <label>Trama</label>
        <textarea cols="50" rows="10" id="plot" name="movie[plot]">{{ $movie->plot ?? '' }}</textarea>
    </div>

    <input type="submit" value="Salva">

</form>

<a href="{{ route('movies.index') }}">Indietro</a>
