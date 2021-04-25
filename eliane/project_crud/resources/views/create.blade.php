<form action="/films" method="post" >
@csrf
    Titolo Film: <input type="text" name="titolo" value="">
    Categoria: <input type="text" name="categoria" value="">
    Tipologia: <input type="text" name="tipologia" value="">
    Anno: <input type="text" name="anno" value="">
    <input type="submit" value="SALVA">
</form>
