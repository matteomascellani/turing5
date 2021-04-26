<form action="/books" method="post" >
    @csrf
        Titolo libro:<input type="text" name="nome" value=""><br/>
        Author:<input type="text" name="author" value=""><br/>
        N° pagine:<input type="text" name="pages" value=""><br/>

        <input type="submit" value="salve" >
    </form>

