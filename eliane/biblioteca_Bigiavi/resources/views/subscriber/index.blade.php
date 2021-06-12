<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <head>
        <title>Homepage Biblioteca BIGIAVI</title>
    </head>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card">
                    <div class="card-header">

                        <div style="float: left">
                            <h1>
                                <b style="font-style: italic;font-family:georgia,sherif ; font-size:23px">Subscrivers</b>
                            </h1>
                        </div>
                        <div style="float: right">
                            <form class="form-inline m-0 my-lg-0" method="GET" action="/searchSubscriber" id="searc">
                                @csrf
                                <input type="search" name="query"  class="form-control rounded" placeholder="Search Subscriber" aria-label="Search" />
                              <button type="submit" class="btn btn-outline-primary" form="searc">search</button>
                            </form>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>Nome</th>
                                <th>Cognome</th>
                                <th>Indirizzo</th>
                                <th>Cap</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Details</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{Str::ucfirst($item->nome)}}</td>
                                    <td>{{ Str::ucfirst($item->cognome)}}</td>
                                    <td>{{ Str::ucfirst($item->indirizzo) }}</td>
                                    <td>{{$item->cap}}</td>
                                    <td>{{ Str::ucfirst( $item->city)}}</td>
                                    <td>{{ Str::ucfirst($item->country)}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                        <form action="" method="get">
                                         @csrf
                                        <input type="submit" class="btn btn-info" value="Read">

                                        </form>
                                    </td>
                                    <td>
                                        <form action="/subscribers/{{$item->id}}/edit" method="get">
                                        @csrf
                                        <input type="submit" class="btn btn-success" value="Edit">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('subscribers.destroy',$item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                        </form>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>

                        </table>


                    </div>

                    <div class="card-footer">
                        <form action="{{route('subscribers.create')}}" method="GET">
                            @csrf
                            <input type="submit" value="New Abbonato" class="btn btn-info">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
