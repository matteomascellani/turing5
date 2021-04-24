<head>
    <style>
        th{
            text-align: left;
        }
    </style>
</head>

<h1>lista dei libri</h1>
<table style="width:45%">
  <tr>
    <th>Titolo libro</th>
    <th>Author</th>
    <th>Pages</th>
  </tr>
@foreach ($lists as $list)
<tr>
    <td><a href="/books/{{$list->id}}/edit">{{$list->nome}}</a></td>
    <td>{{$list->author}}</td>
    <td>{{$list->pages}}</td>
    <form action="/books/{{$list->id}}" method="POST">
    @csrf
    @method('DELETE')
        <td>
          <input type="submit" value="cancella" >
        </td>

    </form>
    <form action="/books/{{$list->id}}">
        @csrf
            <td>
              <input type="submit" value="Detagli" >
            </td>

        </form>
  </tr>

@endforeach

</table><br>
<br>
<a href="/books/create">Nuovo</a>
