@extends('layouts.app')

@section('content')

<form action="{{route('doctors.store')}}" method="post">
    @csrf

    NOME:<input class="form-control" type="text" name="doctor[nome]">
    COGNOME:<input class="form-control" type="text" name="doctor[cognome]">

    <input type="submit" class="btn btn-success" value="salva">
</form>

@endsection
