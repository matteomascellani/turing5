@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('books.store') }}">

    @csrf
    <div><label>Nome</label> <input type="text" name="book[name]" value="{{ old('book.name') }}" placeholde="Name" /></div>
    <div><label>Autore</label> <input type="text" name="book[author]" value="{{ old('book.author') }}" placeholde="Author" /></div>
    <div><label>Pagine</label> <input type="text" name="book[pages]" value="{{ old('book.pages') }}" placeholde="Pages" /></div>
    <div><input type="submit" value=" Salva " />

</form>
