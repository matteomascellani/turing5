<html>

    <body style="background-color: rgb(194, 183, 91)">
        <h2 style="color: rgb(74, 25, 112)">Creazione nuovo studente</h2>

    <form action="{{route ('students.store')}}"  method="post">
    @csrf
        Nome: <input type="text" name="student[nome]" value="">
        Cognome: <input type="text" name="student[cognome]" value=""><br><br>
        Anno Immatricolazione: <input type="text" name="student[anno_immatricolazione]" value=""><br><br>
        Facoltà: <input type="text" name="student[facoltà]" value=""><br><br>
        Anno Corso: <input type="text" name="student[anno_corso]" value=""><br><br>
        <input type="submit" value="CREATE">
    </form>

    </body>

    <a href="{{ route('students.index')}}">Indietro</a>

</html>


