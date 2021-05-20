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
                    <table style="width: 101%">
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>COGNOME</th>
                            <th>MATERIA</th>
                            <th>EMAIL</th>
                        </tr>
                        @foreach ($items as $item)
                            <tr>
                                <td><a href="/professors/{{$item->id}}/edit"> <strong>{{ $item->id }}</strong></a></td>
                                <td><a href="/professors/{{$item->id}}/edit">{{$item->nome}}</a></td>
                                <td>{{ $item->cognome }}</td>
                                <td>{{ $item->materia}}</td>
                                <td>{{ $item->email}}</td>
                                <td>
                                    <form action="/professors/{{$item->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete">
                                    </form>
                                </td>

                            </tr>
                        @endforeach


                    </table><br><br><br>
                      <a href="/professors/create">new Docente</a>
                </body>


            </div>
        </div>
    </div>
</x-app-layout>
