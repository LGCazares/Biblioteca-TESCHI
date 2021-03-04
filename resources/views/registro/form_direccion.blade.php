@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-6 text-center">
            <h2 class="fs-22 fw-bold pine-green">Dirección</h2>
        </div>
    </div>
    <form method="POST" class="row" action="{{route('store.registro')}}">
        @csrf
        <div class="form-group col-lg-4">
            <label for="nombre">Calle </label>
            <input class="form-control" type="text" placeholder="Calle" value="{{old('calle')}}" name="calle">
            {!! $errors->first('calle','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="nombre">Numero Interior</label>
            <input class="form-control" type="text" placeholder="Numero Interior" value="{{old('Num_int')}}" name="num_int">
            {!! $errors->first('num_int','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="nombre">Numero Exterior </label>
            <input class="form-control" type="tex" placeholder="Numero Exterior" value="{{old('num_ext')}}" name="num_ext">
            {!! $errors->first('num_ext','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="nombre">Entre calle </label>
            <input class="form-control" type="text" placeholder="Entre calle " value="{{old('entre_calle')}}" name="entre_calle">
            {!! $errors->first('entre_calle','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="nombre"> y calle </label>
            <input class="form-control" type="text" placeholder="y calle" value="{{old('y_calle')}}" name="y_calle">
            {!! $errors->first('y_calle','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="nombre">Estado </label>
            <input class="form-control" type="text" placeholder="Estado" value="{{old('estado')}}" name="estado">
            {!! $errors->first('estado','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="nombre">Municipio </label>
            <input class="form-control" type="text" placeholder="Municipio" value="{{old('municipio')}}" name="municipio">
            {!! $errors->first('municipio','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="nombre">Colonia </label>
            <input class="form-control" type="text" placeholder="Colonia " value="{{old('colonia')}}" name="colonia">
            {!! $errors->first('colonia','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="nombre">Código postal</label>
            <input class="form-control" type="text" placeholder="Código postal " value="{{old('cp')}}" name="cp">
            {!! $errors->first('cp','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="nombre">Referencia</label>
            <input class="form-control" type="text" placeholder="Referencia " value="{{old('referencia')}}" name="referencia">
            {!! $errors->first('referencia','<span class="error_form">:message <br></span>') !!}
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn-01 col-lg-4">Actualizar</button>
        </div>
    </form>
</div>


@endsection