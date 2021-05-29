html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifica student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <head>
                    <style>
                        .button{
                            background-color: rgb(26, 153, 26);
                            color: white;
                            border-radius: 10%;

                        }
                        div{
                            background-color: rgb(131, 228, 196)
                        }
                        input[type=text] {
                            width: 90%;
                            padding: 12px 20px;
                            margin: 8px 0;
                            box-sizing: border-box;
                            border: 2px solid rgb(46, 189, 117);
                            border-radius: 4px;


                    </style>
                </head>
                <body>

                    <form action="{{ route('students.update',$student->id) }}" method="post" id="sal">
                        @csrf
                        @method('PUT')
                            Nome: <input type="text" name="student[nome]" value="{{$student->nome}}"><br><br>
                            Cognome: <input type="text" name="student[cognome]" value="{{$student->cognome}}"><br><br>
                            Anno Nascita: <input type="text" name="student[data_nascita]" value="{{$student->data_nascita}}">
                            Città di residenza: <input type="text" name="student[citta_residenza]" value="{{$student->citta_residenza}}"><br><br>
                            Indirizzo: <input type="text" name="student[indirizzo]" value="{{$student->indirizzo}}"><br><br>
                            Cap: <input type="text" name="student[cap]" value="{{$student->cap}}"><br><br>
                            Paese: <input type="text" name="student[paese]" value="{{$student->paese}}"><br><br>
                            Email: <input type="text" name="student[email]" value="{{$student->email}}"><br><br>
                            Telefono: <input type="text" name="student[telephono]" value="{{$student->telephono}}"><br><br>
                            Corso frequentato: <input type="text" name="student[corso_frequantato]" value="{{$student->corso_frequantato}}"><br><br>
                            <button type="submit" form="sal" value="salva modifiche" class="button button">Salva modifiche</button>
                        </form>

                </body>

            <a href="{{ route('students.index') }}" style="color: blue">Indietro</a>
            </div>
        </div>
    </div>
</x-app-layout>


</html>
