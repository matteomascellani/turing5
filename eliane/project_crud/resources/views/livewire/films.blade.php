<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div>
        @include('livewire.create')
        <section>
            <div class="container">

                <div class="row">
                    <div class="col-md-10">
                        @if (session()->has('message'))
                            <div class="alert alert-success">{{session('message')}}</div>

                        @endif

                        <div class="card">
                            <div class="card-header">
                                <h2 class="table table-bordered">
                                    Elenco dei films
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFilmModal">
                                        nuovo film
                                    </button>
                                </h2>

                            </div>

                            <div class="card-body">
                                <table class="table table-striped table-hover table-bordered table-condensed">
                                    <thead>
                                        <th>titolo</th>
                                        <th>categoria</th>
                                        <th>tipologia</th>
                                        <th>anno</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{{$item->titolo}}</td>
                                                <td>{{$item->categoria}}</td>
                                                <td>{{$item->tipologia}}</td>
                                                <td>{{$item->anno}}</td>
                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

</body>



