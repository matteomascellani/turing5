<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            th{
                text-align: left
            }
            .button1{
                background-color: blueviolet;
                border-radius: 4px;
            }
            .button2{
                background-color: olivedrab;
            }

        </style>

    </head>
        <body>
            @include('link.pages')
           <div>
               <section>
                   <div class="container">
                    <div class="row">
                        <div class="card " style="width: 100%">
                            <div class="card-header">
                                <h2>LISTA MACHINE DISPONIBILI</h2>
                            </div>
                            <div class="card-body">

                                <table style="width: 100%" class="table table-striped table-hover table-dark" >
                                    <thead>
                                        <tr>
                                            <th>MARCA</th>
                                            <th>COLORE</th>

                                        </tr>
                                    </thead>
                                    <Tbody>
                                        @foreach ($items as $item)
                                        <td><a href="cars/{{$item->id}}/edit">{{$item->marca}}</a></td>
                                        <td>{{$item->colore}}</td>
                                        <td>
                                            <form action="{{route('cars.destroy',$item->id)}}" method="POST" id="del">
                                                @csrf
                                                @method('DELETE')

                                                <button value="delete" form="del" class="button button1" >cancella </button>

                                            </form>
                                        </td>
                                    </tr>

                                        @endforeach
                                </table><br><br>
                                    </Tbody>


                            </div>
                            <div class="card-footer">
                             <form action="{{route('cars.create')}}" method="get" id="new">
                                 @csrf
                                <button class="button button2" form="new">
                                    NEW CAR
                                </button  >
                             </form>


                            </div>

                        </div>
                    </div>

                   </div>
               </section>
           </div>
        </body>

</html>
