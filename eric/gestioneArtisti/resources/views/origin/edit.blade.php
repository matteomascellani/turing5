<form action="{{route('origins.update',$origin->id)}}" method="POST">
    @csrf
    @method('PUT')
    Genere:<input type="text" name="origin[genere]" value="{{$origin->genere}}"><br><br>
    Origine:<input type="text" name="origin[origine]" value="{{$origin->origine}}"><br><br>

    <input type="submit" value="salva modifica">
</form>
