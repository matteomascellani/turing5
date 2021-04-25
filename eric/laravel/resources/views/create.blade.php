
<form action="/books" method="post">
@csrf
    Titolo: <input type="text" name="titolo" value=""><br><br>
    Autore: <input type="text" name="author" value=""><br><br>
    Pagine: <input type="text" name="pages" value=""><br><br>
    <input type="submit" value="salva">
</form>

