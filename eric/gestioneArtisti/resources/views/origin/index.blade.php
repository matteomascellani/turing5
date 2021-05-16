<head>
    <style>
        th{
            text-align: left;
        }
        body{
            background-color: aqua;
        }

    </style>
</head>

<body>
    <h2>Generi Musicali</h2>
    <table style="width:60%">
        <tr>
            <th>ID</th>
            <th>NOME DEL GENERE MUSICALE</th>
            <th>ORIGINE MUSICALE</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td><strong>{{$item->id}} </strong></td>
                <td><a href="/origins/{{$item->id}}/edit">{{ $item->genere }}</a></td>
                <td>{{ $item->origine }}</td>
                <td>
                    <form action="/origins/{{$item->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE">
                    </form>
                </td>
            </tr>


        @endforeach
    </table>
    <a href="/origins/create">nuovo genere</a>
</body>
