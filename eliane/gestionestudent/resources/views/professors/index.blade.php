<!DOCTYPE html>
<html>
<head>
  <style>
     h2,th{
        text-align:left;
        color: rgb(3, 3, 73)
       }
    body{
        background-color: rgb(54, 214, 126)
    }
  </style>
</head>
<body>

<h2>elenco Professori </h2>

<table style="width:70%">
  <tr>
    <th>Nome</th>
    <th>Cognome</th>
    <th>Numero telefono</th>
    <th>Materia</th>
    <th>Studenti</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td><a href="/professors/{{$item->id}}/edit">{{$item->nome}}</a></td>
    <td><a href="/prodeffors/{{$item->id}}/edit">{{$item->cognome}}</a></td>
    <td>{{$item->telefono}}</td>
    <td>{{$item->materia}}</td>
    <td>@foreach($item->students as $student)
            {{$student->nome}} {{$student->cognome}}<br />
        @endforeach
    </td>
  </tr>
  @endforeach
</table>
<br>
<br>
<br>
<a href="{{route('professors.create')}}" style="color: rgb(46, 45, 45)"> Create New professor</a>

</body>


</html>
