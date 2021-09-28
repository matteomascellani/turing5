<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        th {
            text-align: left
        }

    </style>
</head>

<body>
    @include('link.pages')

    <h2>LISTE DES CLIENTS</h2>

    <table class="table table-striped table-hover table-condensed table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Paese</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="customers/{{ $item->id }}/edit">{{ $item->nome }}</a></td>
                    <td>{{ $item->cognome }}</td>
                    <td>{{ $item->paese }}</td>
                    <td>
                        <form action="{{ route('customers.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="cancella">
                        </form>
                    </td>
                </tr>
            @endforeach
    </table><br><br>
    </tbody>

    <a href="/customers/create">CREA NUOVO CLIENTE</a>
</body>

</html>
