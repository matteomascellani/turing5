<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Films</title>
    <link rel="apple-touch-icon" sizes="57x57" href="../images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../images/favicon//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>

    <div class="container p-4">

        <div class="row mt-4">

            <div class="col-12 text-center">

                <h1><span class="text-uppercase">films</span></h1>

            </div>

        </div>

        <div class="row mt-4">

            <div class="col-12">

                @foreach ($movies as $movie)

                    <div class="row border rounded-3 p-2 my-4">

                        <div class="col-12">

                            <h3><span class="text-uppercase">{{ $movie->titolo }}</span></h3>
                            <p>{{ $movie->descrizione }}</p>

                        </div>

                        <div class="col-12 text-center text-md-start">
                            <a href="/movies/{{ $movie->id }}" class="btn btn-primary"
                                title="Visualizza i dettagli di {{ $movie->titolo }}">
                                <span class="text-uppercase">visualizza</span>
                            </a>
                            <a href="/movies/{{ $movie->id }}/edit" class="btn btn-primary"
                                title="Modifica {{ $movie->titolo }}">
                                <span class="text-uppercase">modifica</span>
                            </a>
                            <a href="/movies/{{ $movie->id }}/destroy" class="btn btn-danger"
                                title="Elimina {{ $movie->titolo }}">
                                <span class="text-uppercase">elimina</span>
                            </a>
                        </div>

                    </div>

                @endforeach

            </div>

        </div>

        <div class="row mt-2">

            <div class="col-12 col-lg-4 mx-auto">

                <a href="/movies/create" class="d-block btn btn-success btn-lg" title="Aggiungi un nuovo film">
                    <span class="text-uppercase">nuovo</span>
                </a>

            </div>

        </div>

    </div>

</body>

</html>
