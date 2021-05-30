<html>
    <head></head>
    <body>
        @include('link.pages')
        <form action="{{route('cars.store')}}" method="POST">
            @csrf
            MARCA:<input type="text" name="car[marca]" value=""><br><br>
            COLORE:<input type="text" name="car[colore]" value=""><br><br>
            NOME CLIENTE:<select name="car[customer_id]">
                @foreach ($customer as $custom)
                    <option value="{{$custom->id}}">{{$custom->nome}}</option>
                @endforeach
            </select><br><br>
            COGNOME CLIENTE:<select>
                @foreach ($customer as $custom)
                    <option value="{{$custom->id}}">{{$custom->cognome}}</option>
                @endforeach
            </select><br><br>
            PAESE CLIENTE:<select>
                @foreach ($customer as $custom)
                    <option value="{{$custom->id}}">{{$custom->paese}}</option>
                @endforeach
            </select><br><br>
            <input type="submit" value="crea">
        </form>
        <a href="/cars">lista macchine disponibili</a>
    </body>
</html>
