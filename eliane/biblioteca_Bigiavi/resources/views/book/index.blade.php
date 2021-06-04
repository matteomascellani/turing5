<x-app-layout>
    <x-slot name="">

    </x-slot>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>

        </style>

    </head>
    <body>
        <div>
            @if (strlen(session('target'))>0)
            @if (session('count')==0)
            <div class="alert alert-success " style="color: rgb(13, 97, 13)">

                <u>MESSAGE </u>: <strong style="font-size: 25px"> {{ strtoupper(session('target'))  }}</strong> è stato
                creato correttemente!!!!
            </div>
            @else
            <div class="alert alert-danger">
                <u> Attenzione</u>: <strong style="font-size: 25px">{{strtoupper(session('target'))  }}</strong> esiste
                già!!!!!!!!
            </div>
            @endif

        @endif
        </div>
        <div>
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
        </div>
        <div>
            @if (session('delete'))
                <div class="alert alert-success">{{ session('delete') }}</div>
            @endif
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-12">
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="card" style="width: 100%">
                                    <div class="card-header">
                                        <div style="float: left">
                                            <h2> Elenco Books</h2>
                                        </div>
                                        <div style="float: right">
                                            <form class="form-inline m-0 my-lg-0" method="GET" action="/searchBooks" id="searc">
                                                @csrf
                                                <input type="search" name="query"  class="form-control rounded" placeholder="Search book" aria-label="Search" />
                                              <button type="submit" class="btn btn-primary" form="searc">search</button>
                                            </form>
                                        </div>

                                    </div>


                                    <div class="card-body">

                                        <table class="table table-striped table-hover">
                                           <thead>
                                                <th>Titolo</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Editor</th>
                                                <th>Lingua</th>
                                                <th>Stato</th>
                                                <th>Pages</th>
                                                <th>Peso(g)</th>
                                                <th>Dimensioni(cm)</th>
                                                <th>Anno Pubblicazioni</th>
                                                <th>Details</th>
                                                <th>Action</th>
                                           </thead>
                                           <tbody>
                                               @foreach ($items as $item)

                                               <tr>
                                                   <td><a href="/books/{{$item->id}}/edit">{{Str::upper($item->titolo) }}</a></td>
                                                   <td>{{Str::ucfirst($item->category->nome) }}</td>
                                                   <td>{{Str::ucfirst($item->author->cognome)}} {{Str::ucfirst($item->author->nome)}}</td>
                                                   <td>{{Str::ucfirst($item->editor)}}</td>
                                                   <td>{{Str::ucfirst($item->language_id)}}</td>
                                                   <td>{{$item->stato}}</td>
                                                   <td>{{$item->pages}}</td>
                                                   <td>{{$item->peso}}</td>
                                                   <td>{{$item->dimensioni}}</td>
                                                   <td>{{$item->anno}}</td>
                                                   <td>
                                                       <form action="" method="post">
                                                           <input type="submit" class="btn btn-info " value="read">
                                                       </form>
                                                   </td>
                                                   <td>
                                                    <form action="{{route('books.destroy',$item->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" class="btn btn-danger" value="delete">
                                                    </form>
                                                   </td>
                                               </tr>
                                               @endforeach
                                           </tbody>
                                        </table>

                                    </div>

                                    <div class="card-footer">
                                        <div style="float: left">
                                            <form action="{{route('books.create')}}" method="get">
                                                @csrf
                                                <input type="submit" value="new book" class="btn btn-primary">
                                            </form>
                                        </div>
                                        <div style="float: right">
                                           <h5><strong style="font-family: 'Times New Roman', Times, serif">Total Books:  {{($allbooks)}}</strong></h5>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </body>


</x-app-layout>