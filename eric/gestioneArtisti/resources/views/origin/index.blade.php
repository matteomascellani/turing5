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
            <th>NOME DEL GENERE MUSICALE</th>
            <th>ORIGINE MUSICALE</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->genere }}</td>
                <td>{{ $item->origine }}</td>
            </tr>

        @endforeach
    </table>
</body>
