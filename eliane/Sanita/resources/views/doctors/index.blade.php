@extends('layouts.app')

@section('content')

    <table class="table table-hover">
        <thead>
            <th></th>
            <th>nome</th>
            <th>cognome</th>
        </thead>
        <tbody>

            @foreach ($items as $item)
                <tr>
                    <td><a href="{{route('doctors.edit',$item->id)}}" class="btn btn-primary btn-circle"><i class="fa fa-user-circle"></i></a></td>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->cognome }}</td>
                    <td>
                        <form action="{{route('doctors.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i> </button>
                        </form>
                    </td>
                </tr>

            @endforeach

        </tbody>
    </table>
    <a href="{{ route('doctors.create') }}" class="btn btn-primary">new doctors</a>

@endsection
