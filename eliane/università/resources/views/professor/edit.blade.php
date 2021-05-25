html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifica docente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <head>
                    <style>
                        div{
                            background-color: rgb(243, 222, 104)
                        }
                        .button{
                            background-color: rgb(26, 153, 26);
                            color: white;
                            border-radius: 10%;

                        }
                    </style>
                </head>
                <body>

                    <form action="{{ route('professors.update',$professor->id) }}" method="post" >
                        @csrf
                        @method('PUT')
                            Nome: <input type="text" name="professor[nome]" value="{{$professor->nome}}"><br><br>
                            Cognome: <input type="text" name="professor[cognome]" value="{{$professor->cognome}}"><br><br>
                            Materia: <input type="text" name="professor[materia]" value="{{$professor->materia}}">
                            Email: <input type="text" name="professor[email]" value="{{$professor->email}}"><br><br>
                            <button type="submit" form="sal" value="salva modifiche" class="button button">Salva modifiche</button>
                        </form>

                </body>

            <a href="{{ route('professors.index') }}">Indietro</a>
            </div>
        </div>
    </div>
</x-app-layout>


</html>
