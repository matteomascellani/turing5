
<form action="/books/{{$libro->id}}" method="post" >
@csrf
@method('PUT')
    Titolo libro:<input type="text" name="nome" value="{{$libro->nome}}"><br/>
    Author:<input type="text" name="author" value="{{$libro->author}}"><br/>
    N° pagine:<input type="text" name="pages" value="{{$libro->pages}}"><br/>

    <input type="submit" value="salve" >
</form>

<a href="/books">indietro</a>

