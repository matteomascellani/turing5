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
                            background-color: rgb(243, 222, 104)
                        }

                        th {
                            text-align: left;
                            color: rgb(2, 36, 25)
                        }

                        tr:nth-child(even) {
                            background-color: #d3d1d1;

                        }
                        .button1{
                            background-color: rgb(59, 92, 238);
                            color: white;
                            border-radius: 10%;

                        }
                        .button2{
                            background-color: rgb(241, 43, 43);
                            color: white;
                            border-radius: 10%;

                        }
                        .button3{
                            background-color: rgb(26, 153, 26);
                            color: white;
                            border-radius: 5%;

                        }

                    </style>
                </head>

                <body>
                    <table style="width: 105%">
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>COGNOME</th>
                            <th>MATERIA</th>
                            <th>EMAIL</th>
                            <th>STUDENTI</th>

                        </tr>
                        @foreach ($items as $item)
                            <tr>
                                <td><a href="/professors/{{$item->id}}/edit"> <strong>{{ $item->id }}</strong></a></td>
                                <td><a href="/professors/{{$item->id}}/edit">{{$item->nome}}</a></td>
                                <td>{{ $item->cognome }}</td>
                                <td>{{ $item->materia}}</td>
                                <td>{{ $item->email}}</td>
                                <td><a href="/professors/{{$item->id}}/students" style="color: rgb(82, 173, 123)">students</a></td>
                                <td>
                                    <form action="{{route('professors.show',$item->id)}}" id="stamp" method="GET">
                                    @csrf
                                        <button type="submit" form="stamp" value="stampa" class="button button1"> stampa </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="/professors/{{$item->id}}" method="post" id="del">
                                    @csrf
                                    @method('DELETE')
                                   <button type="submit" value="delete" form="del" class="button button2">delete</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach


                    </table><br><br><br>
                       <form action="{{route('professors.create')}}" method="get" id="crea">
                        @csrf
                        <button form="crea" value="nuovo studente" class="button button3">nuovo Docente</button>
                    </form>
                </body>


            </div>
        </div>
    </div>
</x-app-layout>
