<html>
<head>
    <style>
       body{
           background-color: rgb(197, 230, 120)
       }
        h2{
            color: rgb(74, 16, 129)
        }

    </style>
</head>

    <body>

        <h2>Creazione nuovo professor</h2>

    <form action="{{route ('professors.store')}}"  method="post">
    @csrf
        Nome: <input type="text" name="professor[nome]" value="">
        Cognome: <input type="text" name="professor[cognome]" value=""><br><br>
        Numero telefono: <input type="text" name="professor[telefono]" value=""><br><br>
        materia: <input type="text" name="professor[materia]" value=""><br><br>

        <input type="submit" value="CREATE">
    </form>

    </body>

    <a href="{{ route('professors.index')}}">Indietro</a>

</html>
