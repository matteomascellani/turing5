<h1>Lista Articoli</h1>

<table class="table-primary">
    @foreach($items as $item)
    <td>{{$item->Lean}}</td>
    <td>{{$item->Sku}}</td>
    <td>{{$item->Tipologia}}</td>
    <td>{{$item->Marca}}</td>
    @endforeach
</table>
