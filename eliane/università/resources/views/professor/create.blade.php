
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
                        button{
                            background-color: green;
                            color: beige;
                            border-radius: 8%;
                            font-size: 20px;

                        }
                        div{
                            background-color: rgb(243, 222, 104)
                        }

                    </style>
                </head>
                <body>

                    <form action="{{ route('professors.store') }}" method="post" id="nameform">
                        @csrf
                        <table>
                            <tr>
                                <td>Nome: <input type="text" name="professor[nome]" value=""><br><br></td>
                                <td>Cognome: <input type="text" name="professor[cognome]" value=""><br><br></td>
                                <td>Materia: <input type="text" name="professor[materia]" value=""><br><br></td>
                                <td>Email: <input type="text" name="professor[email]" value=""><br><br></td>

                            </tr>
                        </table>

                        <button type="submit" form="nameform" value="Submit">Submit</button>

                        </form>

                </body><br><br><br>

            <a href="{{ route('professors.index') }}" style="color: blue">Indietro</a>
            </div>
        </div>
    </div>
</x-app-layout>


</html>
