<html>
<head></head>
    <body style="background-color:green">
        <form action="/films" method="post" >
            @csrf
                Titolo Film: <input type="text" name="titolo" value="">
                Categoria: <input type="text" name="categoria" value="">
                Tipologia: <input type="text" name="tipologia" value="">
                Anno: <input type="number" name="anno" value="" min="1900" max='2021'}>
                <input type="submit" value="SALVA">
            </form>

    </body>


</html>
