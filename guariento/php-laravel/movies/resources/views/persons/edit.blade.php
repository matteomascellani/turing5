<form action="{{ isset($person) ? route('persons.update', $person->id) : route('persons.store') }}" method="post">

    @csrf

    @if (isset($person))
        @method('PUT')
    @endif

    <div>
        <label>Nome</label>
        <input type="text" id="name" name="person[name]" value="{{ $person->name ?? '' }}">
    </div>

    <div>
        <label>Cognome</label>
        <input type="text" id="surname" name="person[surname]" value="{{ $person->surname ?? '' }}">
    </div>

    <input type="submit" value="Salva">
</form>

<a href="{{ route('persons.index') }}">Indietro</a>
