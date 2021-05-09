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
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h2>Creazione nuovo studente</h2>

    <form action="{{route ('students.store')}}"  method="post">
    @csrf
        Nome: <input type="text" name="student[nome]" value="">
        Cognome: <input type="text" name="student[cognome]" value=""><br><br>
        Anno Immatricolazione: <input type="text" name="student[anno_immatricolazione]" value=""><br><br>
        Corso Frequentato: <input type="text" name="student[corso_frequentato]" value=""><br><br>
        Facoltà: <input type="text" name="student[facoltà]" value=""><br><br>
        Anno Corso: <input type="text" name="student[anno_corso]" value=""><br><br>
        <input type="submit" value="CREATE">
    </form>

    </body>

    <a href="{{ route('students.index')}}">Indietro</a>

</html>


