<html>
    <head>
        <style>
            th{
                text-align: left
            }
        </style>

    </head>
        <body>
            @include('link.pages')
            <h2>LISTA MACHINE DISPONIBILI</h2>
            <table style="width: 100%" >
                <tr>
                    <th>MARCA</th>
                    <th>COLORE</th>
                </tr>
                    @foreach ($items as $item)
                    <td><a href="cars/{{$item->id}}/edit">{{$item->marca}}</a></td>
                    <td>{{$item->colore}}</td>
                    <td>
                        <form action="{{route('cars.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="cancella">

                        </form>
                    </td>
                </tr>

                    @endforeach
            </table><br><br>
            <a href="/cars/create">crea</a>

        </body>

</html>
