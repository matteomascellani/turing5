<form action="{{ isset($people) ? route('peoples.update', $people->id) : route('peoples.store') }}" method="{{ isset($people->id) ? 'get' : 'post'}}">

    @csrf
    @if(isset($people))
        @method('PUT')
    @endif

    <div>
    <label>Nome</label>
    <input type="text" id="name" name="people[name]" value="{{ $people->name ?? '' }}"/>
    </div>
    <div>
    <label>Cognome</label>
    <input type="text" id="surname" name="people[surname]" value="{{ $people->surname ?? '' }}"/>
    </div>
    <input type="submit" value="Salva"/>

    </form>

    <a href="{{ route('peoples.index') }}">Indietro</a>
