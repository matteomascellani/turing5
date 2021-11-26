@extends('layouts.app')

@section('content')

<table class="table table-hover">
    <thead>

        <th>nome</th>
        <th>cognome</th>
    </thead>
    <tbody>

            @foreach ($items as $item)
               <tr>

                <td><i class="fa fa-user-circle" style="color:rgb(159, 88, 218)"></i>{{$item->nome}}</td>
                <td>{{$item->cognome}}</td>
                <td><form action="/doctors/create" method="POST">
                    @csrf
                    <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i> </button>
                    </form>
                </td>
               </tr>

            @endforeach

    </tbody>
</table>
<a href="{{route('doctors.create')}}" class="btn btn-primary">new doctors</a>

@endsection
