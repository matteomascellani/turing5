<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="row mt-4">

            <div class="col-12 text-center text-uppercase">

                <h1>films</h1>

            </div>

        </div>

        <div class="row mt-4">

            <div class="col-12">

                @foreach ($movies as $movie)

                    <div class="row border p-2 my-4">


                        <div class="col-12">

                            <h3 class="text-uppercase">{{ $movie->titolo }}</h3>
                            <p>{{ $movie->descrizione }}</p>
                            <p><strong>Regia</strong>: <em>{{ $movie->regia }}</em></p>
                            <p><strong>Anno di rilascio</strong>: <em>{{ $movie->anno }}</em></p>
                            <p><strong>Durata</strong>: <em>{{ $movie->durata }}</em></p>
                            <p><strong>Genere</strong>: <em>{{ $movie->genere }}</em></p>

                        </div>

                        <div class="col-12 text-center text-md-start">
                            <a href="/movies/{{ $movie->id }}/edit"
                                class="btn btn-primary text-uppercase">dettaglio</a>
                            <a href="/movies/{{ $movie->id }}/destroy"
                                class="btn btn-danger text-uppercase">rimuovi</a>
                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</body>

</html>
