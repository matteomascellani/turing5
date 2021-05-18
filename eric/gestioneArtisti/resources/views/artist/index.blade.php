<html>
    <head>
        <style>
            th{
                text-align: center;
            }

        </style>
    </head>
    <body>
        <table>
            <th>NOME</th>
            <th>COGNOME</th>
            <th>BRANO</th>
            <th>ANNO</th>
            @foreach ($items as $item)
                <tr>
                    <td> <a href="/artists/{{$item->id}}/edit">{{$item->nome}}</a></td>
                    <td>{{$item->cognome}}</td>
                    <td>{{$item->brano}}</td>
                    <td>{{$item->anno}}</td>
                    <td>
                        <form action="/artists/{{$item->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" >
                        </form>
                    </td>
                </tr>

            @endforeach
        </table><br><br><br>

        <a href="/artists/create">New Artist</a>
    </body>
</html>
