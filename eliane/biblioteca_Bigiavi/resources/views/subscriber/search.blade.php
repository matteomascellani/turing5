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
                        <div>
                            <h1>
                                <b style="font-style: italic;font-family:georgia,sherif ; font-size:23px">risultato ricerca Subscrivers</b>
                            </h1>
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
                                </tr>

                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
