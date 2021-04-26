<html>
<head>
<style>
th {
  text-align: left;
  color: rgb(8, 42, 116);
}
</style>
</head>
<body style="background-color: beige">

<h2>Lista Articoli</h2>

<table style="width:50%">
  <tr>
    <th>Nome Prodotto</th>
    <th>Origine</th>
    <th>Quantità</th>
    <th>Prezzo</th>
    <th>Descrizione</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td><a href="/articles/{{$item->id}}/edit">{{$item->nome}}</a></td>
    <td>{{$item->origine}}</td>
    <td>{{$item->quantità}}</td>
    <td>{{$item->prezzo}}</td>
    <td>{{$item->descrizione}}</td>
  </tr>
  @endforeach
</table>
<a href="/articles/create">New article</a>
</body>
</html>
