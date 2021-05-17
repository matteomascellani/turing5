<form action="{{route('artists.update',$artist->id)}}" method='post'>
    @csrf
    @method('PUT')
       <u> Nome</u>:<input type="text" name="artist[nome]" value="{{$artist->nome}}"><br><br>
        <u> Cognome</u>:<input type="text" name="artist[cognome]" value="{{$artist->cognome}}"><br><br>
        <u>Nome Brano</u> :<input type="text" name="artist[brano]" value="{{$artist->brano}}"><br><br>
        <u>Anno Uscita</u>: <input type="text" name="artist[anno]" value="{{$artist->anno}}"><br><br>
        <input type="submit" value="modifica">
    </form>

