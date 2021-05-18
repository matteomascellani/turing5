

<form action="{{route('origins.store')}}" method="POST">
    @csrf
    Genere:<input type="text" name="origine[genere]" value=""><br><br>
    Origine:<input type="text" name="origine[origine]" value=""><br><br>

    <input type="submit" value="salva">
</form>
