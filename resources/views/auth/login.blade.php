@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title"> Inicio de Sesión</h1>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{route('store.login')}}">
                    @csrf
                    <div class="form-group">
                        <label for="email"> Correo Electronico</label>
                        <input class="form-control" 
                        type="email" name="email" 
                        placeholder="Ingresa tu correo electronico">
                    </div>
                    <div class="form-group">
                        <label for="password"> Contraseña</label>
                        <input class="form-control" 
                        type="password" name="password" 
                        placeholder="Ingresa tu contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"> Ingresar </button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('layouts._footer')
@endsection