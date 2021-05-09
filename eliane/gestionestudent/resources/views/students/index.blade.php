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

<table style="width:70%">
  <tr>
    <th>Nome</th>
    <th>Cognome</th>
    <th>Anno Immatricolazione</th>
    <th>Corso Frequentato</th>
    <th>Facoltà</th>
    <th>Anno Corso</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td><a href="/students/{{$item->id}}/edit">{{$item->nome}}</a></td>
    <td><a href="/students/{{$item->id}}/edit">{{$item->cognome}}</a></td>
    <td>{{$item->anno_immatricolazione}}</td>
    <td>{{$item->corso_frequentato}}</td>
    <td>{{$item->facoltà}}</td>
    <td>{{$item->anno_corso}}</td>
    <td>
        <form action="/students/{{$item->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="DELETE">
        </form>
    </td>
  </tr>
  @endforeach
</table>
<br>
<br>
<br>
<a href="{{route('students.create')}}" style="color: rgb(46, 45, 45)"> Create New Student</a>

</body>


</html>
