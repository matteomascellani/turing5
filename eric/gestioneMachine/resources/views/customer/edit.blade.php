<html>
    <head></head>
    <body>
        <form action="{{route('customers.update',$customer->id)}}" method="POST">
            @csrf
            @method('PUT')
            Nome:<input type="text" name="customer[nome]" value="{{$customer->nome}}"><br><br>
            Cognome:<input type="text" name="customer[cognome]" value="{{$customer->cognome}}"><br><br>
            Paese:<input type="text" name="customer[paese]" value="{{$customer->paese}}"><br><br>
            <input type="submit" value="modifica">
        </form>
    </body>
</html>
