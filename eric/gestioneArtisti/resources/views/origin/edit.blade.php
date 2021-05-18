<html>
    <head>
        <style>

        </style>
    </head>
    <body>
        <form action="{{route('origins.update',$origin->id)}}" method="post">
            @csrf
            @method('PUT')
            GENERE: <input type="text" name="origin[genere]" value="{{$origin->genere}}"><br><br>
            ORIGINE: <input type="text" name="origin[origine]" value="{{$origin->origine}}"><br><br>

            <input type="submit" value="sava modifica">
        </form>

    </body>
</html>
