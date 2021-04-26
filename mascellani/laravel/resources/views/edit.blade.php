

<form method="post" action="{{ route('books.update',$item->id) }}">
@csrf
@method('PUT')
Nome: <input type="text" name="name" value="{{ $item->name }}" /><br />
Autore: <input type="text" name="author" value="{{ $item->author }}" /><br />
Pagine: <input type="text" name="pages" value="{{ $item->pages }}" /><br />
<input type="submit" value=" Salva " />
</form>


<a href="{{ route('frontend.welcome') }}">Indietro</a>
