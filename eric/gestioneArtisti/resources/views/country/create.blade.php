<html>
    <head>
        <style>

        </style>
    </head>
    <body>
        <form action="{{route('countries.store')}}" method="post">
            @csrf
            PAESE: <input type="text" name="country[paese]" value=""><br><br>
            CAPITALE: <input type="text" name="country[capitale]" value=""><br><br>
            LINGUA: <input type="text" name="country[lingua]" value=""><br><br>
            PRESIDENTE: <input type="text" name="country[presidente]" value=""><br><br>

            <input type="submit" value=" create">
        </form>

    </body>
</html>

