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
                        div{
                            background-color: rgb(131, 228, 196)
                        }

                        th {
                            text-align: left;
                            color: rgb(2, 36, 25)
                        }

                        tr:nth-child(even) {
                            background-color: #d3d1d1;
                        }

                    </style>
                </head>

                <body>


                    <table style="width: 102%">
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>COGNOME</th>
                            <th>ANNO NASCITA</th>
                            <th>RESIDENZA</th>
                            <th>INDIRIZZO</th>
                            <th>CAP</th>
                            <th>PAESE</th>
                            <th>EMAIL</th>
                            <th>TELEFONO</th>
                            <th>CORSO FREQUENTATO</th>
                            <th>PROFESSORI</th>


                        </tr>
                        @foreach ($items as $item)
                            <tr>
                                <td><a href="/students/{{$item->id}}/edit"> <strong>{{ $item->id }}</strong></a></td>

                                <td><a href="/students/{{$item->id}}/edit">{{$item->nome}}</a></td>
                                <td>{{ $item->cognome }}</td>
                                <td>{{ $item->data_nascita }}</td>
                                <td>{{ $item->citta_residenza }}</td>
                                <td>{{ $item->indirizzo }}</td>
                                <td>{{ $item->cap }}</td>
                                <td>{{ $item->paese }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->telephono }}</td>
                                <td>{{ $item->corso_frequantato }}</td>
                                <td><a href="/students/{{ $item->id}}/professors">professori</a></td>
                                <td>
                                    <form action="/students/{{$item->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete">
                                    </form>
                                </td>

                            </tr>
                        @endforeach


                    </table><br><br><br>
                      <a href="/students/create">new Student</a>
                </body>


            </div>
        </div>
    </div>
</x-app-layout>
