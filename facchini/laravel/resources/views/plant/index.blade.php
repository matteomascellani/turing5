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
<h3>Plants List</h3>

<a href="/plants/create" class="btn btn-success">New Plant</a>
<br /><br /><br />

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Sowing Month</th>
      <th scope="col">Blooming Month</th>
      <th scope="col">Height in cm</th>
      <th scope="col">Type of Plant</th>
   </tr>
  </thead>

  <tbody>
    @foreach($plants as $plant)
      <tr scope="row">
        <td>{{ $plant->name }}</td>
        <td>{{ $plant->sowing_month }}</td>
        <td>{{ $plant->blooming_month }}</td>
        <td>{{ $plant->height }}</td>
        <td>{{ $plant->type_of_plant }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>