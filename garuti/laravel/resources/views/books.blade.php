<h3>Lista dei Libri </h3>


<ul>
@foreach ($items as $item)
    <li>{{$item -> name}} - {{$item -> author}} - {{$item -> pages}}</li>
@endforeach
</ul>
<table>
    @foreach ($items as $item)
        <tr><td>{{$item -> name}}</td><td>{{$item -> author}}</td><td>{{$item -> pages}}</td></tr>
    @endforeach
</table>
