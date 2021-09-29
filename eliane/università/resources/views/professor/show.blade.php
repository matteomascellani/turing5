
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dati anagrafici Docenti') }}

            <x-jet-nav-link href="{{ route('professors.create') }}" :active="request()->routeIs('professors.create')">
                {{ __('Nuovo Docente') }}
            </x-jet-nav-link>


        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                <head>
                    <style>
                        h1{
                            text-align: center;
                            color: rgb(121, 59, 59);
                            font-size: 25px;
                        }
                        body{
                            background-color: blanchedalmond;
                        }
                        div{
                            background-color: rgb(243, 222, 104)
                        }
                    </style>

                </head>
                <body>


                    <h1>universita di Douala</h1>

                    <h2><strong>{{$professor->nome}} {{$professor->cognome}}</strong></h1>

                    materia:{{$professor->materia}} <br><br>
                    email:{{$professor->email}}



                </body>


            </div>
        </div>
    </div>
</x-app-layout>





