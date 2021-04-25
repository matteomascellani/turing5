<head>
    <style>
        th{
            text-align: left;
        }
    </style>
</head>

<h1>Tutti Films</h1>
<table style="width:45%">
  <tr>
    <th>Titolo Film</th>
    <th>Categoria</th>
    <th>Tipologia</th>
    <th>Anno</th>
  </tr>
@foreach ($items as $item)
<tr>
    <td>{{$item->titolo}}</td>
    <td>{{$item->categoria}}</td>
    <td>{{$item->tipologia}}</td>
    <td>{{$item->anno}}</td>

@endforeach

</table><br>
