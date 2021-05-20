<html>
    <head></head>
    <body>
        <form action="{{route('cars.update',$car->id)}}" method="POST">
            @csrf
            @method('PUT')
            MARCA:<input type="text" name="car[marca]" value="{{$car->marca}}"><br><br>
            COLORE:<input type="text" name="car[colore]" value="{{$car->colore}}"><br><br>
            <input type="submit" value="salva">

        </form>
    </body>
</html>
