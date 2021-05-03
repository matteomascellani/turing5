<div><a href="{{ route('books.create') }}">Nuovo libro</a></div>

@foreach($books as $book)
    <div><a href="{{ route('books.edit', $book->id) }}">Edita {{ $book->name }}</a></div>
@endforeach
