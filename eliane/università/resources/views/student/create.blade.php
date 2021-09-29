<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('new student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                <head>
                    <style>
                        body {
                            background-color: rgb(131, 228, 196)
                        }

                        button {
                            font-size: 15px;
                            background-color: rgb(50, 206, 50);
                            border-radius: 4px;
                            color: white;

                        }

                        div {
                            background-color: rgb(131, 228, 196)
                        }

                        input[type=text] {
                            width: 100%;
                            padding: 12px 20px;
                            margin: 8px 0;
                            box-sizing: border-box;
                            border: 2px solid red;
                            border-radius: 4px;

                    </style>
                </head>

                <body>

                    <form action="{{ route('students.store') }}" method="post" id="crea">
                        @csrf
                        <table>
                            <td>
                                <tr>
                                    Nome: <input type="text" name="student[nome]" value=""><br><br>
                                </tr>
                            </td>
                            <td>
                                <tr>
                                    Cognome: <input type="text" name="student[cognome]" value=""><br><br>

                                </tr>
                            </td>

                            <tr>
                                Anno Nascita: <input type="text" name="student[data_nascita]" value=""><br><br>

                            </tr>
                            <tr>
                                Città di residenza: <input type="text" name="student[citta_residenza]" value=""><br><br>

                            </tr>
                            <tr>
                                Indirizzo: <input type="text" name="student[indirizzo]" value="">

                            </tr>
                            <tr>
                                Cap: <input type="text" name="student[cap]" value=""><br><br>

                            </tr>
                            <tr>
                                Paese: <input type="text" name="student[paese]" value=""><br><br>

                            </tr>
                            <tr>
                                Email: <input type="text" name="student[email]" value=""><br><br>

                            </tr>
                            <tr>
                                Telefono: <input type="text" name="student[telephono]" value=""><br><br>

                            </tr>
                            <tr>
                                Corso frequentato: <input type="text" name="student[corso_frequantato]"
                                    value=""><br><br>

                            </tr>
                            <tr>
                                <button type="submit" form="crea" value="salva">SALVA</button>
                            </tr>
                            </td>
                        </table>

                    </form>

                </body>

                <a href="{{ route('students.index') }}" style="color: blue">Indietro</a>
            </div>
        </div>
    </div>
</x-app-layout>


</html>
