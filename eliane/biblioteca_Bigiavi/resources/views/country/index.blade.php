<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <head>
        <title>Home Country</title>
    </head>

    <body>
        @include('country.create')
        <div>
           @if (strlen(session('target'))>0)
            @if (session('count')==0)
                <div class="alert alert-success " style="color: rgb(13, 97, 13)">

                    <u>MESSAGE </u>: <strong style="font-size: 25px"> {{session('target')}}</strong> è stato creato correttemente!!!!
                </div>

            @else
              <div class="alert alert-danger">
                <u> Attenzione</u>: <strong style="font-size: 25px">{{session('target')}}</strong> esiste già!!!!!!!!
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
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="card">
                        <div class="card-header">
                            <h2>
                                <b style="font-style: italic;font-family:georgia,sherif ; font-size:23px">Country</b>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#addCountryModal">aggiungi country</button>
                            </h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            CODE
                                        </th>
                                        <th>
                                            NOME
                                        </th>
                                        <th>
                                            DETAILS
                                        </th>
                                        <th>
                                            ACTION
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)

                                        <tr>
                                            <td>
                                                {{strtoupper($item->code)}}
                                            </td>
                                            <td>
                                                 {{Str::ucfirst($item->state)}}
                                            </td>

                                            <td>
                                                <form action="{{ route('countries.show', $item->id) }}" method="get">
                                                    @csrf

                                                    <input type="submit" value="read" class="btn btn-info">
                                                </form>
                                            </td>
                                            <td>
                                                <form action="/countries/{{ $item->id }}/edit" method="get">
                                                    @csrf

                                                    <input type="submit" value="edit" class="btn btn-info">
                                                </form>
                                            </td>
                                            <td>
                                                <form action="/countries/{{ $item->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger" value="cancella">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>


</x-app-layout>
