<html>
    <head>
        <style>
            body{
                background-color: rgb(196, 233, 233);
            }
            h1{
                font-size: 20px;
            }
            th{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <table>
            <th>PAESE</th>
            <th>CAPITALE</th>
            <th>LINGUA</th>
            <th>PRESIDENTE</th>
            @foreach ($items as $item)
                <tr>
                    <td> <a href="">{{$item->paese}}</a></td>
                    <td>{{$item->capitale}}</td>
                    <td>{{$item->lingua}}</td>
                    <td>{{$item->presidente}}</td>
                </tr>
            @endforeach
        </table>

    </body>
</html>
