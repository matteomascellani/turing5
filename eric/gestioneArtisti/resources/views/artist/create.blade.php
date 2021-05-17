<form action="{{route('artists.store')}}" method='post'>
@csrf
   <u> Nome</u>:<input type="text" name="artist[nome]" value=""><br><br>
    <u> Cognome</u>:<input type="text" name="artist[cognome]" value=""><br><br>
    <u>Nome Brano</u> :<input type="text" name="artist[brano]" value=""><br><br>
    <u>Anno Uscita</u>: <input type="text" name="artist[anno]" value=""><br><br>
    <input type="submit" value=" salva">
</form>

