@extends('layouts.app')

@section('content')
<form action="{{route('medici.store')}}" method="POST">
    @csrf
    nome:<input type="text"  name="medico[nome]" value="">
         <small id="helpId" class="form-text text-muted">Help text</small>
    cognome:<input type="text"  name="medico[cognome]" value="">
         <small id="helpId" class="form-text text-muted">Help text</small>
    specialite:<input type="text"  name="medico[specialita]" value=""><br>
         <small class="text-danger">{{$errors->first('medico.specialita')}}</small><br>

    <input type="submit" class="btn btn-primary" value="salva">

</form>

@endsection
