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
                    <div class="form-group col-lg-12">
                        <label for="email">Correo Electronico </label>
                        <input class="form-control" type="email" placeholder="Correo Electronico" value="{{old('email')}}" name="email">
                        {!! $errors->first('email','<span class="error_form">:message <br></span>') !!}
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="password">Ingresa una contraseña </label>
                        <input class="form-control" type="password" placeholder="Contraseña" value="" name="password" maxlength="20">
                        {!! $errors->first('password','<span class="error_form">:message <br></span>') !!}
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Ingresar </button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('layouts._footer')
@endsection