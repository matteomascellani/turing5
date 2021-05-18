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
            <th>GENERE</th>
            <th>ORIGINE</th>
            @foreach ($items as $item)
                <tr>
                    <td> <a href="/origins/{{$item->id}}/edit">{{$item->genere}}</a></td>
                    <td>{{$item->origine}}</td>
                    <td>
                        <form action="/origins/{{$item->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" >
                        </form>
                    </td>
                </tr>

            @endforeach
        </table><br><br><br>

        <a href="/origins/create">New Artist</a>
    </body>
</html>
