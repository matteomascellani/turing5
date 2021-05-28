<html>
    <head></head>
    <body>
        <form action="{{route('customers.store')}}" method="POST">
            @csrf
            NOME:<input type="text" name="customer[nome]" value=""><br><br>
            COGNOME:<input type="text" name="customer[cognome]" value=""><br><br>
            PAESE:<input type="text" name="customer[paese]" value=""><br><br>
            <input type="submit" value="crea">
        </form><br><br>
        <a href="/customers">LISTA DEI CLIENTI</a>
    </body>
</html>
