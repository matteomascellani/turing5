
<html>
    <head>
        <style>
            th{
                color: blue;
                text-align: left;
            }
            table{

                width: 60%;
            }
            body{
                background-color: rgb(220, 231, 233);
            }
            td{
                color: brown;
            }
            h2{
                color: blueviolet;

            }
            a{
                color: rgb(6, 59, 17)
            }
        </style>
    </head>
<body>
    <h2>Lista Artisti</h2>
<table>
  <tr>
    <th>nome</th>
    <th>cognome</th>
    <th>brano</th>
    <th>anno</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td><a href="/artists/{{$item->id}}/edit">{{$item->nome}}</a></td>
    <td>{{$item->cognome}}</td>
    <td>{{$item->brano}}</td>
    <td>{{$item->anno}}</td>
  </tr>
  @endforeach
</table>
<a href="/artists/create">crea un artista</a>
</body>
</html>

