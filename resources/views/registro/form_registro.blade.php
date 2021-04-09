@extends('layouts.app')
@section('content')
@if (session('status'))
<div class="alert alert-success mt-2" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="container " style="background:linear-gradient(30deg,rgb(0, 0, 0), rgb(13, 80, 35),rgb(53, 114, 91), rgb(12, 165, 81), rgb(152, 240, 160), rgb(179, 253, 219))" class="navbar navbar-expand-lg navbar-light" class="bg-warning rounded">
   
    <div class="row justify-content-center my-5" >
        <div class="col-lg-6 text-center">
            <h2 class="fs-22 fw-bold pine-green">Registrate</h2>
        </div>
    </div>
    <form method="POST" action="{{route('store.registro')}}">
        @csrf
        <div class="row">
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
            <div class="form-group col-lg-4">
                <label for="segundo_apellido">Apellido materno:</label>
                <input class="form-control" type="text" placeholder="Apellido materno" value="{{old('segundo_apellido')}}" name="segundo_apellido">
                {!! $errors->first('segundo_apellido','<span class="error_form">:message</span>') !!}
            </div>
            <div class="form-group col-lg-4">
                <label for="curp">CURP:</label>
                <input class="form-control rfc-curp" type="text" placeholder="curp" value="{{old('curp')}}" name="curp" maxlength="18">
                {!! $errors->first('curp','<span class="error_form">:message <br></span>') !!}
            </div>
            <div class="form-group col-lg-4">
                <label for="telefono">Telefono:</label>
                <input class="form-control" type="tel" placeholder="Telefono" value="{{old('telefono')}}" name="telefono">
                {!! $errors->first('telefono','<span class="error_form">:message</span>') !!}
            </div>
            <div class="form-group col-lg-4">
                <label for="celular">Celular:</label>
                <input class="form-control" type="tel" placeholder="Celular" value="{{old('celular')}}" name="celular">
                {!! $errors->first('celular','<span class="error_form">:message</span>') !!}
            </div>
            <div class="form-group col-lg-4">
                <label for="email">Correo Electronico </label>
                <input class="form-control" type="email" placeholder="Correo Electronico" value="{{old('email')}}" name="email">
                {!! $errors->first('email','<span class="error_form">:message <br></span>') !!}
            </div>
        </div>
        <div style="border-top: solid 2px #91C470;" ></div>
        <div class="row mt-3" >
            <div class="form-group col-lg-4">
                <label for="password">Ingresa una contraseña </label>
                <input class="form-control" type="password" placeholder="Contraseña" value="" name="password" maxlength="20">
                {!! $errors->first('password','<span class="error_form">:message <br></span>') !!}
            </div>
            <div class="form-group ¿ col-lg-4">
                <label for="password_confirmation">Confirma tu contraseña </label>
                <input class="form-control" type="password" placeholder="Contraseña" value="" name="password_confirmation" maxlength="20">
                {!! $errors->first('password_confirmation','<span class="error_form">:message <br></span>') !!}
            </div>
        </div>
        <div class="d-flex justify-content-end col-12">
            <button type="submit" class="btn btn-primary col-lg-4">Guardar Registro</button>
        </div>
    </form>
</div>
@endsection
