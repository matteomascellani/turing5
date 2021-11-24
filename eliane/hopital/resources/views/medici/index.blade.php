@extends('layouts.app')

@section('content')

    <table class="table table-hover">
        <thead>
            <th>nome</th>
            <th>cognome</th>
            <th>specialita</th>
        </thead>
        <tbody>

            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->cognome }}</td>
                    <td>{{ $item->specialita }}</td>
                    <td><a href="{{route('medici.edit',$item->id)}}" class="btn btn-danger"> modifica</a></td>
                </tr>

            @endforeach


        </tbody>
    </table>
    <a href="{{ route('medici.create') }}">create</a>

@endsection
