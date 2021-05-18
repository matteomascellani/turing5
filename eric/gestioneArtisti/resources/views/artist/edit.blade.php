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
            BRANO: <input type="text" name="artist[brano]" value="{{$artist->brano}}"><br><br>
            ANNO: <input type="text" name="artist[anno]" value="{{$artist->anno}}"><br><br>
            <input type="submit" value=" salva modifiche">
        </form>

    </body>
</html>
