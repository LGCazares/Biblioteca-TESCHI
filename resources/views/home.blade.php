@extends('layouts.app')
@section('content')
<div class="div_verde">
    <article id="opciones">
        <font color="black"> </font>
        <article class="arti"><a href="{{route('info.alumno')}}">Información del alumno</a> </article>
        <article class="arti"> <a href="{{route('lista.libros')}}">Consulta de Libros</article>
        <article class="arti"><a href="{{route('prestamo.libros')}}">Libros Prestados </article>
        <article class="arti"><a href="{{route('store.alumno')}}">Alta Alumno</article>
        <article class="menu"></article>
    </article>
</div>
@include('layouts._footer')
@endsection