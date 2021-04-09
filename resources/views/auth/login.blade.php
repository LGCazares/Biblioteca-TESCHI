@extends('layouts.app')
@section('content')
@if (session('status'))
<div class="alert alert-success mt-2" role="alert">
    {{ session('status') }}
</div>
@endif

<div class="container col-lg-8" class="bg-warning rounded" style="background:linear-gradient(30deg,rgb(0, 0, 0),rgb(13, 80, 35),rgb(53, 114, 91), rgb(12, 165, 81), rgb(152, 240, 160), rgb(179, 253, 219))" width="100%" height="310" style="border:0;" allowfullscreen="" loading="lazy">-

    <div class="panel-heading col-lg-12">
        <h1> Inicio de Sesión</h1>
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


            <button type="submit" class="buttons col-lg-6" > Ingresar </button>
        </form>

    </div>
</div>
@endsection