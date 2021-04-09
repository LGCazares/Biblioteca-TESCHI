@extends('layouts.app')
@section('content')
<div class="container " style="background:linear-gradient(30deg,rgb(53, 114, 91), rgb(12, 165, 81), rgb(152, 240, 160), rgb(179, 253, 219))" class="navbar navbar-expand-lg navbar-light" class="bg-warning rounded">
    <div class="row justify-content-center my-5">
        <div class="col-lg-6 text-center">
            <h2 class="fs-22 fw-bold pine-green">Dirección</h2>
        </div>
    </div>
    <form method="POST" class="row" action="{{route('store.registro')}}">
        @csrf
        <div class="form-group col-lg-4 ">
            <label for="calle">Calle </label>
            <input class="form-control" type="text" placeholder="Calle" value="{{old('calle')}}" name="calle">
            {!! $errors->first('calle','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="num_int">Numero Interior</label>
            <input class="form-control" type="text" placeholder="Numero Interior" value="{{old('num_int')}}" name="num_int">
            {!! $errors->first('num_int','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="num_ext">Numero Exterior </label>
            <input class="form-control" type="tex" placeholder="Numero Exterior" value="{{old('num_ext')}}" name="num_ext">
            {!! $errors->first('num_ext','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="entre_calle">Entre calle </label>
            <input class="form-control" type="text" placeholder="Entre calle " value="{{old('entre_calle')}}" name="entre_calle">
            {!! $errors->first('entre_calle','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="y_calle"> y calle </label>
            <input class="form-control" type="text" placeholder="y calle" value="{{old('y_calle')}}" name="y_calle">
            {!! $errors->first('y_calle','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="estado">Estado </label>
            <input class="form-control" type="text" placeholder="Estado" value="{{old('estado')}}" name="estado">
            {!! $errors->first('estado','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="municipio">Municipio </label>
            <input class="form-control" type="text" placeholder="Municipio" value="{{old('municipio')}}" name="municipio">
            {!! $errors->first('municipio','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="colonia">Colonia </label>
            <input class="form-control" type="text" placeholder="Colonia " value="{{old('colonia')}}" name="colonia">
            {!! $errors->first('colonia','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="cp">Código postal</label>
            <input class="form-control" type="text" placeholder="Código postal " value="{{old('cp')}}" name="cp">
            {!! $errors->first('cp','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="referencia">Referencia</label>
            <input class="form-control" type="text" placeholder="Referencia " value="{{old('referencia')}}" name="referencia">
            {!! $errors->first('referencia','<span class="error_form">:message <br></span>') !!}
        </div>

        <div class="d-flex justify-content-end col-12">
            <button type="submit" class="buttons col-lg-3">Guardar Registro </button>
        </div>
    </form>
</div>


@endsection