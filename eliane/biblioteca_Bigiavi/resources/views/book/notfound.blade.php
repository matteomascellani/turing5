<x-app-layout>
    <x-slot name="">

    </x-slot>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>

        </style>

    </head>
    <body>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-12">
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="card" style="width: 100%">
                                    <div class="card-header">
                                        <div style="float: left">
                                            <h4>stai cercando :{{$search}}</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <table class="table table-striped table-hover">
                                           <thead>
                                                <th>Titolo</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Editor</th>
                                                <th>Lingua</th>
                                                <th>Stato</th>
                                                <th>Pages</th>
                                                <th>Peso(g)</th>
                                                <th>Dimensioni(cm)</th>
                                                <th>Anno Pubblicazioni</th>
                                                <th>Details</th>
                                                <th>Action</th>
                                           </thead>
                                           <tbody>
                                               <tr style="background-color: rgb(255, 197, 197)">
                                                   <td colspan="12" style="text-align: center"><em>LIBRO NON TROVATO!!!!!!!!</em></td>
                                               </tr>

                                           </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </body>


</x-app-layout>
