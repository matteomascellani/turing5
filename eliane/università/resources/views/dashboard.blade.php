

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size: 35px">
            <em style="color: rgb(170, 39, 68)">

            {{ __('UNIVERSITA DI DOUALA') }}
            </em>
        </h2>
    </x-slot>
    <head>
        <style>
            div{
                background-color: rgb(245, 222, 192);
            }
        </style>
    </head>

    <body style="background-color: aquamarine">


        <div class="py-12">
            <p style="font-size:35px" >il nostro sito si occupa della gestione degli studenti e professori dell'universita di Douala <br> si pu creare modificare i loro dati. <br> di puo inoltre cancellare uno studente .</p>
        </div>
    </body>

</x-app-layout>
