<html>
    <head>
        <style>
            th{
                text-align: center;
            }
            body{
                background-color: rgb(148, 173, 165)
            }
            table.center{
                margin-left:auto;
                margin-right: auto;

            }

        </style>
    </head>
    <body>
        @include('pages.page')
        <div>
            <table class="center">
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

        </div>

        <a href="/origins/create" style="text-align: center">New origine</a>
    </body>
</html>
