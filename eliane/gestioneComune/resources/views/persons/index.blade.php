<head>

</head>
<body>
    <table class="table table-striped">
        <th>nome</th>
        <th>cognone</th>
        <th>datanascita</th>
        <th>adress</th>
        <th>zip</th>
        <th>citta</th>
        <th>country</th>
        <th>email</th>
        <th>phone</th>
        <th>professione</th>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->cognome}}</td>
                    <td>{{$item->data_nascita}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->zip}}</td>
                    <td>{{$item->city}}</td>
                    <td>{{$item->country}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->professione}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
</body>
