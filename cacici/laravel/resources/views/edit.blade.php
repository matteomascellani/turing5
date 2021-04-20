<form method="post" action="/articoli/{{$item->id}}">
    @csrf
    @method('PUT')
    Lean: <input type="text" name="Lean" value="{{ $item->Lean }}" /><br />
    Sku: <input type="text" name="Sku" value="{{ $item->Sku }}" /><br />
    Tipologia: <input type="text" name="Tipologia" value="{{ $item->Tipologia }}" /><br />
    Marca: <input type="text" name="Marca" value="{{ $item->Marca }}" /><br />
    <input type="submit" value=" Salva " />
</form>
