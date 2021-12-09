@extends('layouts.app')

@section('content')

<form action="{{route('doctors.update',$doctor->id)}}" method="post">
    @csrf
@method('PUT')
    NOME:<input class="form-control" type="text" name="doctor[nome]" value="{{$doctor->nome}}">
    COGNOME:<input class="form-control" type="text" name="doctor[cognome]" value="{{$doctor->cognome}}">

    <input type="submit" class="btn btn-success" value="salva">
</form>

@endsection
