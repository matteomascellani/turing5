<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <head>
                    <style>
                        body {
                            background-color: rgb(74, 124, 107)
                        }

                        th {
                            text-align: left;
                            color: rgb(2, 36, 25)
                        }

                    </style>
                </head>

                <body>
                    <table style="width: 100%">
                        <tr>
                            <th>NOME</th>
                            <th>COGNOME</th>
                            <th>ANNO NASCITA</th>
                            <th>CITTA RESIDENZA</th>
                            <th>INDIRIZZO</th>
                            <th>CAP</th>
                            <th>PAESE</th>
                            <th>EMAIL</th>
                            <th>TELEFONO</th>
                            <th>CORSO FREQUENTATO</th>

                        </tr>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->nome }}</td>
                                <td>{{ $item->cognome }}</td>
                                <td>{{ $item->data_nascita }}</td>
                                <td>{{ $item->citta_residenza }}</td>
                                <td>{{ $item->indirizzo }}</td>
                                <td>{{ $item->cap }}</td>
                                <td>{{ $item->paese }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->telephono }}</td>
                                <td>{{ $item->corso_frequantato }}</td>

                            </tr>
                        @endforeach


                    </table>




                </body>

            </div>
        </div>
    </div>
</x-app-layout>
