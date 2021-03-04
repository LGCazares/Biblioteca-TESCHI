@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
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
                <label for="ap_paterno">Apellido paterno:</label>
                <input class="form-control" type="text" placeholder="Apellido paterno" value="{{old('ap_paterno')}}" name="ap_paterno">
                {!! $errors->first('ap_paterno','<span class="error_form">:message</span>') !!}
            </div>
            <div class="form-group col-lg-4">
                <label for="ap_materno">Apellido materno:</label>
                <input class="form-control" type="text" placeholder="Apellido materno" value="{{old('ap_materno')}}" name="ap_materno">
                {!! $errors->first('ap_materno','<span class="error_form">:message</span>') !!}
            </div>
            <div class="form-group col-lg-4">
                <label for="nombre">CURP:</label>
                <input class="form-control" type="text" placeholder="CURP" value="{{old('curp')}}" name="curp">
                {!! $errors->first('nombre','<span class="error_form">:message <br></span>') !!}
            </div>
            <div class="form-group col-lg-4">
                <label for="telefono">Telefono:</label>
                <input class="form-control" type="tel" placeholder="Telefono" value="{{old('telefono')}}" name="telefono">
                {!! $errors->first('telefono','<span class="error_form">:message</span>') !!}
            </div>
            <div class="form-group col-lg-4">
                <label for="ap_materno">Celular:</label>
                <input class="form-control" type="tel" placeholder="Celular" value="{{old('celular')}}" name="celular">
                {!! $errors->first('celular','<span class="error_form">:message</span>') !!}
            </div>
            <div class="form-group col-lg-4">
                <label for="nombre">Correo Electronico </label>
                <input class="form-control" type="text" placeholder="Correo Electronico" value="{{old('correo')}}" name="correo">
                {!! $errors->first('correo','<span class="error_form">:message <br></span>') !!}
            </div>
        </div>
        <div style="border-top: solid 2px #91C470;" ></div>
        <div class="row mt-3" >
            <div class="form-group col-lg-4">
                <label for="nombre">Ingresa una contraseña </label>
                <input class="form-control" type="password" placeholder="Contraseña" value="{{old('correo')}}" name="correo" maxlength="20">
                {!! $errors->first('correo','<span class="error_form">:message <br></span>') !!}
            </div>
            <div class="form-group ¿ col-lg-4">
                <label for="nombre">Confirma tu contraseña </label>
                <input class="form-control" type="password" placeholder="Contraseña" value="{{old('correo')}}" name="correo" maxlength="20">
                {!! $errors->first('correo','<span class="error_form">:message <br></span>') !!}
            </div>
        </div>
        <div class="d-flex justify-content-end col-12">
            <button type="submit" class="btn btn-primary col-lg-4">Guardar Registro</button>
        </div>
    </form>
</div>


@endsection