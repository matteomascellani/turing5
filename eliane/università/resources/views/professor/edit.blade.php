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
                <body>

                    <form action="{{ route('professors.update',$professor->id) }}" method="post" >
                        @csrf
                        @method('PUT')
                            Nome: <input type="text" name="professor[nome]" value="{{$professor->nome}}"><br><br>
                            Cognome: <input type="text" name="professor[cognome]" value="{{$professor->cognome}}"><br><br>
                            Materia: <input type="text" name="professor[materia]" value="{{$professor->materia}}">
                            Email: <input type="text" name="professor[email]" value="{{$professor->email}}"><br><br>
                            <input type="submit" value="SALVA">
                        </form>

                </body>

            <a href="{{ route('professors.index') }}">Indietro</a>
            </div>
        </div>
    </div>
</x-app-layout>


</html>
