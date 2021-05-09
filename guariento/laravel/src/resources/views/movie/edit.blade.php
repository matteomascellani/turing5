<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Film | Modifica</title>
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

                <h1><span class="text-uppercase">modifica</span></h1>

            </div>

        </div>

        <div class="row mt-4">

            <div class="col-12 col-lg-8 mx-lg-auto">

                <form method="POST" action="/movies/{{ $movie->id }}">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="input-titolo" class="form-label">Titolo</label>
                        <input type="text" id="input-titolo" name="input-titolo" value="{{ $movie->titolo }}"
                            class="form-control" placeholder="Scrivi il titolo...">
                    </div>

                    <div class="mb-3">
                        <label for="input-descrizione" class="form-label">Descrizione</label>
                        <textarea id="input-descrizione" name="input-descrizione" rows="5" class="form-control"
                            style="resize: none;"
                            placeholder="Scrivi la descrizione...">{{ $movie->descrizione }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="input-regia" class="form-label">Regia</label>
                        <input type="text" id="input-regia" name="input-regia" value="{{ $movie->regia }}"
                            class="form-control" placeholder="Scrivi il regista...">
                    </div>

                    <div class="mb-3">
                        <label for="input-anno" class="form-label">Anno di rilascio</label>
                        <input type="text" id="input-anno" name="input-anno" class="form-control"
                            value="{{ $movie->anno }}" placeholder="Scrivi l'anno di rilascio...">
                    </div>

                    <div class="mb-3">
                        <label for="input-durata" class="form-label">Durata</label>
                        <input type="text" id="input-durata" name="input-durata" class="form-control"
                            value="{{ $movie->durata }}" placeholder="Scrivi la durata...">
                    </div>

                    <div class="mb-5">
                        <label for="input-genere" class="form-label">Genere</label>
                        <input type="text" id="input-genere" name="input-genere" class="form-control"
                            value="{{ $movie->genere }}" placeholder="Scrivi il genere...">
                    </div>

                    <div class="row justify-content-lg-center">

                        <div class="col-12 col-lg-4">

                            <button type="submit" class="btn btn-success btn-lg d-block w-100">
                                <span class="text-uppercase">aggiorna</span>
                            </button>

                        </div>

                        <div class="col-12 mt-2 col-lg-4 mt-lg-0">

                            <a href="/movies" class="btn btn-primary btn-lg d-block">
                                <span class="text-uppercase">indietro</span>
                            </a>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</body>

</html>
