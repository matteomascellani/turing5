<form method="post" action="/musics">
@csrf
Nome: <input type="text" name="name" value="" /><br />
Compositore: <input type="text" name="composer" value="" /><br />
Data: <input type="text" name="date" value="" /><br />
<input type="submit" value="Salva" />
</form>

<a href="/musics">Indietro</a>
