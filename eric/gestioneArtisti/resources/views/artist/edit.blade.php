<html>
    <head>
        <style>

        </style>
    </head>
    <body>
        <form action="{{route('artists.update',$artist->id)}}" method="post">
            @csrf
            @method('PUT')
            NOME: <input type="text" name="artist[nome]" value="{{$artist->nome}}"><br><br>
            COGNOME: <input type="text" name="artist[cognome]" value="{{$artist->cognome}}"><br><br>
            <select name="artist[country_id]">
                @foreach ($country as $count)
                    <option value="{{$count->id}}">{{$count->paese}}</option>
                @endforeach
            </select>
            BRANO: <input type="text" name="artist[brano]" value="{{$artist->brano}}"><br><br>
            STILE MUSICALE: <select name="artist[origin_id]">
                @foreach ($origin as $item)
                    <option value="{{$item->id}}">{{$item->genere}}</option>
                @endforeach
            </select>
            ANNO: <input type="text" name="artist[anno]" value="{{$artist->anno}}"><br><br>
            <input type="submit" value=" salva modifiche">
        </form>

    </body>
</html>
