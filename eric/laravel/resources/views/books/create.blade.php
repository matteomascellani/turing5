@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('books.store')}}" method="post">
@csrf
    Titolo: <input type="text" name="book[titolo]" value=""><br><br>
    Autore: <input type="text" name="book[author]" value=""><br><br>
    Pagine: <input type="text" name="book[pages]" value=""><br><br>
    <input type="submit" value="salva">
</form>

