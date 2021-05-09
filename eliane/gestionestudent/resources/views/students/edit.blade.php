<html>

    <body style="background-color: rgb(194, 183, 91)">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h2 style="color: rgb(74, 25, 112)">Creazione nuovo studente</h2>

    <form action="{{route ('students.update',$student->id)}}"  method="POST">
    @csrf
    @method('PUT')
        Nome: <input type="text" name="student[nome]" value="{{$student->nome}}">
        Cognome: <input type="text" name="student[cognome]" value="{{$student->cognome}}"><br><br>
        Anno Immatricolazione: <input type="text" name="student[anno_immatricolazione]" value="{{$student->anno_immatricolazione}}"><br><br>
        Corso Frequentato: <input type="text" name="student[corso_frequentato]" value="{{$student->corso_frequentato}}"><br><br>
        Facoltà: <input type="text" name="student[facoltà]" value="{{$student->facoltà}}"><br><br>
        Anno Corso: <input type="text" name="student[anno_corso]" value="{{$student->anno_corso}}"><br><br>

        <input type="submit" value="Salve Modifica">
    </form>

    </body>

    <a href="{{ route('students.index')}}">Indietro</a>

</html>
