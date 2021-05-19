<html>
    <head>
        <style>
            th{
                text-align: center;
            }

        </style>
    </head>
    <body>
        @include('pages.page')
        <table>
            <th>PAESE</th>
            <th>CAPITALE</th>
            <th>LINGUA</th>
            <th>PRESIDENTE</th>
            @foreach ($items as $item)
                <tr>
                    <td> <a href="/countries/{{$item->id}}/edit">{{$item->paese}}</a></td>
                    <td>{{$item->capitale}}</td>
                    <td>{{$item->lingua}}</td>
                    <td>{{$item->presidente}}</td>
                    <td>
                        <form action="/countries/{{$item->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" >
                        </form>
                    </td>
                </tr>

            @endforeach
        </table><br><br><br>

        <a href="/countries/create">New country</a>
    </body>
</html>
