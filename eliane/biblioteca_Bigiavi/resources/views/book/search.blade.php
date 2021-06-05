<x-app-layout>
    <x-slot name="">

    </x-slot>
    <head>

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
                                    <div class="card-header" style="background-color: rgb(106, 233, 106)">
                                        <h3>Stai cercando il libro: " {{Str::ucfirst($search)}} "</h3>
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
                                        <form action="{{route('books.create')}}" method="get">
                                            @csrf
                                            <input type="submit" value="new book" class="btn btn-primary">
                                        </form>
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
