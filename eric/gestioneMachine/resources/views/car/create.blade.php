<html>
    <head></head>
    <body>
        <form action="{{route('cars.store')}}" method="POST">
            @csrf
            MARCA:<input type="text" name="car[marca]" value=""><br><br>
            COLORE:<input type="text" name="car[colore]" value=""><br><br>
            <input type="submit" value="crea">
        </form>
        <a href="/cars">lista macchine disponibili</a>
    </body>
</html>
