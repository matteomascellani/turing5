@if ($errors->any())
    <div class="alert alert-danger">
        Guarda che c'è un errore!
    </div>
@endif

<form method="post" action="{{ route('books.update', $book->id) }}">

    @csrf
    @method('PUT')
    <div>
        <label>Nome</label>
        <input type="text" name="book[name]" value="{{ old('book.name',$book->name ?? '') }}" placeholde="Name" />
        <small>{{ $errors->first('book.name') ?? '' }}</small>
    </div>
    <div>
        <label>Autore</label>
        <input type="text" name="book[author]" value="{{ old('book.author',$book->author ?? '') }}" placeholde="Author" />
        <small>{{ $errors->first('book.author') ?? '' }}</small>
    </div>
    <div>
        <label>Pagine</label>
        <input type="text" name="book[pages]" value="{{ old('book.pages',$book->pages ?? '') }}" placeholde="Pages" />
        <small>{{ $errors->first('book.pages') ?? '' }}</small>
    </div>
    <div><input type="submit" value=" Salva " />

</form>
