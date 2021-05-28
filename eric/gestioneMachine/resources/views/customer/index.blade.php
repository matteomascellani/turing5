<html>
    <head>
        <style>
            th{
                text-align: left
            }
        </style>
    </head>
    <body>
        <h2>LISTE DES CLIENTS</h2>

<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Cognome</th>
    <th>Paese</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>{{$item->id}}</td>
    <td><a href="customers/{{$item->id}}/edit">{{$item->nome}}</a></td>
    <td>{{$item->cognome}}</td>
    <td>{{$item->paese}}</td>
    <td>
        <form action="{{route('customers.destroy',$item->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="cancella">
        </form>
    </td>
  </tr>
  @endforeach
</table><br><br>
<a href="/customers/create">CREA NUOVO CLIENTE</a>
    </body>

</html>
