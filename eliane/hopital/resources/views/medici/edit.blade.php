@extends('layouts.app')

@section('content')

<form action="{{route('medici.update',$medico->id)}}" method="POST">
    @csrf
    @method('PUT')
    nome:<input type="text"  name="medico[nome]" value="{{$medico->nome}}">

    cognome:<input type="text"  name="medico[cognome]" value="">

    specialite:<input type="text"  name="medico[specialita]" value=""><br>
         <small class="text-danger">{{$errors->first('medico.specialita')}}</small><br>


</form>

@endsection
