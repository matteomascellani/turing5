<html>
    <head>
        <style>

        </style>
    </head>
    <body>
        <form action="{{route('artists.store')}}" method="post">
            @csrf
            NOME: <input type="text" name="artist[nome]" value=""><br><br>
            COGNOME: <input type="text" name="artist[cognome]" value=""><br><br>
            PAESE: <select name="artist[country_id]">
               @foreach ($country as $item)
                   <option value="{{$item->id}}">
                         {{$item->paese}}
                   </option>
               @endforeach
            </select>
            BRANO: <input type="text" name="artist[brano]" value=""><br><br>
            ANNO: <input type="text" name="artist[anno]" value=""><br><br>
            <input type="submit" value=" create">
        </form>

    </body>
</html>
