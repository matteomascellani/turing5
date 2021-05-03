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
<h3>Add a new Plant</h3>
<form method="post" action="/plants">
@csrf
<table class="table">
<td>Nome: <input type="text" name="input-name" value="" /> </td>
<td>Sowing Month: <input type="text" name="input-sowing" value="" /></td>
<td>Blooming Month: <input type="text" name="input-blooming" value="" /></td>
<td>Height: <input type="text" name="input-height" value="" /></td>
<td>Type of Plant: <input type="text" name="input-type" value="" /></td>
</table>
<br/>

<input type="submit" value=" Save " class="btn btn-success ">

</form>
<br/>
<a href="/plants" class="btn btn-danger">Go back</a>
</body>
</html>