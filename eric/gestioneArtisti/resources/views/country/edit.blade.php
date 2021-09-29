<html>
    <head>
        <style>

        </style>
    </head>
    <body>
        <form action="{{route('countries.update',$country->id)}}" method="post">
            @csrf
            @method('PUT')
            PAESE: <input type="text" name="country[paese]" value="{{$country->paese}}"><br><br>
            CAPITALE: <input type="text" name="country[capitale]" value="{{$country->capitale}}"><br><br>
            LINGUA: <input type="text" name="country[lingua]" value="{{$country->lingua}}"><br><br>
            PRESIDENTE: <input type="text" name="country[presidente]" value="{{$country->presidente}}"><br><br>
            <input type="submit" value=" salva modifiche">
        </form>

    </body>
</html>
