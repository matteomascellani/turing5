<html>
    <head>
        <style>

        </style>
    </head>
    <body>
        <form action="{{route('origins.store')}}" method="post">
            @csrf
            GENERE: <input type="text" name="origin[genere]" value=""><br><br>
            ORIGINE: <input type="text" name="origin[origine]" value=""><br><br>

            <input type="submit" value=" create">
        </form>

    </body>
</html>
