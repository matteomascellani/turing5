
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

                    <p style="text-align: center"><u> Elenco studenti Professore:</u>  <strong style="font-size: 22px">{{$professor->nome}} {{$professor->cognome}}</strong></p> <br><br>
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


                        </tr>
                        @foreach ($items as $item)
                            <tr>
                                <td> <strong>{{ $item->id }}</strong></td>
                                <td>{{$item->nome}}</td>
                                <td>{{ $item->cognome }}</td>
                                <td>{{ $item->data_nascita }}</td>
                                <td>{{ $item->citta_residenza }}</td>
                                <td>{{ $item->indirizzo }}</td>
                                <td>{{ $item->cap }}</td>
                                <td>{{ $item->paese }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->telephono }}</td>
                                <td>{{ $item->corso_frequantato }}</td>
                                <td>
                                    <form action="/professors/{{$professor->id}}/students" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <input type="submit" value="delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table><br><br><br><br>
                   <form action="/professors/{{$professor->id}}/students" method="POST">
                    @csrf
                       <select name="studentId">
                           @foreach ($allstudents as $student)
                           <option value="{{$student->id}}">{{$student->nome}}  {{$student->cognome}}</option>

                           @endforeach
                       </select>
                        <input type="submit" value="add">
                    </form>





                </body>


            </div>
        </div>
    </div>
</x-app-layout>
