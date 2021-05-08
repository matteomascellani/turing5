<!DOCTYPE html>
<html>
<head>
  <style>
     h2,th{
        text-align:left;
        color: rgb(3, 3, 73)
       }
    body{
        background-color: rgb(87, 121, 122)
    }
  </style>
</head>
<body>

<h2>elenco studenti</h2>

<table style="width:50%">
  <tr>
    <th>Nome</th>
    <th>Cognome</th>
    <th>Anno Immatricolazione</th>
    <th>Facoltà</th>
    <th>Anno Corso</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>{{$item->nome}}</td>
    <td>{{$item->cognome}}</td>
    <td>{{$item->anno_immatricolazione}}</td>
    <td>{{$item->facoltà}}</td>
    <td>{{$item->anno_corso}}</td>
  </tr>
  @endforeach
</table>
</body>

<a href="{{route('students.create')}}">create</a>
</html>
