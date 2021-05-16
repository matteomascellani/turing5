@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('books.update',$livres->id)}}" method="post">
@csrf
@method('PUT')
    Titolo: <input type="text" name="titolo" value="{{$livres->titolo}}"><br><br>
    Autore: <input type="text" name="author" value="{{$livres->author}}"><br><br>
    Pagine: <input type="text" name="pages" value="{{$livres->pages}}"><br><br>
    <input type="submit" value="conferma modificare">

</form>
<a href="{{route(books.index)}}">indietro</a>

