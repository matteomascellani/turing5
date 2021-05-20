html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('new Docente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <head>
                    <style>
                        body{
                            background-color: rgb(131, 228, 196)
                        }

                    </style>
                </head>
                <body>

                    <form action="{{ route('professors.store') }}" method="post" >
                        @csrf
                            Nome: <input type="text" name="professor[nome]" value=""><br><br>
                            Cognome: <input type="text" name="professor[cognome]" value=""><br><br>
                            Materia: <input type="text" name="professor[materia]" value=""><br><br>
                            Email: <input type="text" name="professor[email]" value=""><br><br>
                            <input type="submit" value="SALVA">
                        </form>

                </body>

            <a href="{{ route('professors.index') }}">Indietro</a>
            </div>
        </div>
    </div>
</x-app-layout>


</html>
