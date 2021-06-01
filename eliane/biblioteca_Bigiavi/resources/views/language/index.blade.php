<x-app-layout>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            th {
                text-align: left;
            }

        </style>
    </head>

    <body>
        @include('language.create')
        <div>

            @if (strlen(session('target')) > 0)

                @if (session('count') == 0)

                    <div class="alert alert-success" style="color: rgb(35, 233, 35) ,font-size:45%">
                        <u>MESSAGE </u>: Il <strong style="font-size: 25px"> {{ session('target')}} </strong> è stato creato con successo;
                    </div>

                @else

                    <div class="alert alert-warning" style="color: rgb(197, 27, 27)">
                        <u> Attenzione</u>: La lingua <strong style="font-size: 25px"> {{ session('target')}} </strong> esiste già!!!!!!!!!!
                    </div>

                @endif

            @endif

        </div>



        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                    <div>
                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="card" style="width: 100%">
                                        <div class="card-header">
                                            <h2>
                                                elenco lingue
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#addLanguageModal">aggiungi lingua</button>
                                            </h2>

                                        </div>
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <th>ID</th>
                                                    <th>lingue</th>
                                                    <th>detagli</th>
                                                    <th>action</th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($items as $item)
                                                        <tr>
                                                            <td>
                                                                <a
                                                                    href="/languages/{{ $item->id }}/edit">{{ $item->id }}</a>
                                                            </td>
                                                            <td>
                                                                <a
                                                                    href="/languages/{{ $item->id }}/edit">{{strtoupper($item->name)}}</a>
                                                            </td>
                                                            <td>
                                                                <form
                                                                    action="{{ route('languages.show', $item->id) }}"
                                                                    method="get">
                                                                    @csrf

                                                                    <input type="submit" value="read"
                                                                        class="btn btn-info">
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <form action="/languages/{{ $item->id }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-danger"
                                                                        value="cancella">
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
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
        </div>
    </body>

</x-app-layout>
