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
                    @livewireStyles
                    <style>
                        div{
                            background-color: rgb(131, 228, 196);

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
                            border-radius: 10%;

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
                                <td><a href="/students/{{ $item->id}}/professors" style="color: mediumseagreen">professori</a></td>
                                <td>
                                    <form action="{{route('students.show',$item->id)}}" method="get" id="stamp">
                                        @csrf
                                        <button type="submit" form="stamp" value="stampa" class="button button1">Stampa</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="/students/{{$item->id}}" method="post" id="del">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" form="del" value="delete" class="button button2">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach


                    </table><br><br><br>
                    <form action="{{route('students.create')}}" method="get" id="crea">
                        <button type="submit" form="crea" class="button button3">Create</button>
                    </form>


                    <div>

                        <livewire:counter />
                    </div>

                    @livewireScripts
                </body>


            </div>
        </div>
    </div>
</x-app-layout>
