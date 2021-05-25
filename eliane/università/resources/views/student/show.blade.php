<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dati anagrafici Student') }}

            <x-jet-nav-link href="{{ route('students.create') }}" :active="request()->routeIs('students.create')">
                {{ __('create student') }}
            </x-jet-nav-link>


        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                <head>
                    <style>
                        h1 {
                            text-align: center;
                            color: rgb(121, 59, 59);
                            font-size: 30px;
                        }

                        body {
                            background-color: blanchedalmond;
                        }

                    </style>

                </head>

                <body>


                    <h1>universita di Douala</h1>

                    <h2><strong>{{ $student->nome }} {{ $student->cognome }}</strong></h1>

                        data nascita: {{ $student->data_nascita }} <br>
                        citta residenza: {{ $student->citta_residenza }} <br>
                        Indirizzo:{{ $student->indirizzo }} <br>
                        Cap: {{ $student->cap }} <br>
                        Paese: {{ $student->paese }} <br>
                        Email:{{ $student->email }} <br>
                        Telefono:{{ $student->telephono }} <br>
                        Corso frequentato:{{ $student->corso_frequantato }} <br>


                </body>

            </div>
        </div>
    </div>
</x-app-layout>
