@extends('layouts.app')
@section('content')
@if (session('status'))
<div class="alert alert-success mt-2" role="alert">
    {{ session('status') }}
</div>
@endif
<div class=" container row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title"> Inicio de Sesión</h1>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{route('store.login')}}">
                    @csrf
                    <div class="form-group col-lg-4">
                        <label for="nombre">Nombre:</label>
                        <input class="form-control" type="text" placeholder="Nombre" value="{{old('nombre')}}" name="nombre">
                        {!! $errors->first('nombre','<span class="error_form">:message <br></span>') !!}
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="primer_apellido">Apellido paterno:</label>
                        <input class="form-control" type="text" placeholder="Apellido paterno" value="{{old('primer_apellido')}}" name="primer_apellido">
                        {!! $errors->first('primer_apellido','<span class="error_form">:message</span>') !!}
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Ingresar </button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('layouts._footer')
@endsection