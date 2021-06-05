<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        @include('link.pages')
        <form action="{{route('cars.store')}}" method="POST" id="creat">
            @csrf
             <label for="marca">marca</label>
             <input type="text" name="car[marca]" class="form-control" value=""/><br><br>
             <label for="colore">colore</label>
             <input type="text" name="car[colore]" class="form-control" value=""/><br><br>
             <label for="marca">nome cliente</label>

            <select name="car[customer_id]" class="form-control">
                @foreach ($customer as $custom)
                    <option value="{{$custom->id}}">{{$custom->nome}} {{$custom->cognome}}</option>
                @endforeach
            </select><br><br>
            <label for="paese">paese</label>
            <select class="form-control">
                @foreach ($customer as $custom)
                    <option value="{{$custom->id}}">{{$custom->paese}}</option>
                @endforeach
            </select><br><br>

            <button form="creat" class="btn btn-success" value="create">create</button>
        </form>
        <a href="/cars" >lista macchine disponibili</a>
    </body>
</html>
