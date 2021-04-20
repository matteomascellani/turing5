<h3>Lista dei libri</h3>

{{ $name }}

<ul>
@foreach($items as $item)

<li>{{ $item->name }} - {{ $item->author }} - {{ $item->pages }}</li>

@endforeach
</ul>
