<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Plants</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">>
</head>

<body>
<h3>Edit a Plant</h3>
<form method="put" action="/plants/{{$item->id}}">
@csrf
<table class="table">
<td>Nome: <input type="text" name="name" value="{{ $item->name }}" /> </td>
<td>Sowing Month: <input type="text" name="sowing_month" value="{{ $item->sowing_month }}" /></td>
<td>Blooming Month: <input type="text" name="blooming_month" value="{{ $item->blooming_month }}" /></td>
<td>Height: <input type="text" name="height" value="{{ $item->height }}" /></td>
<td>Type of Plant: <input type="text" name="type_of_plant" value="{{ $item->type_of_plant}}" /></td>
</table>
<br/>
<input type="submit" value=" Salva " class="btn btn-success "/>
</form>


<a href="/books">Indietro</a>
</body>
</html>