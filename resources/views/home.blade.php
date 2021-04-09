@extends('layouts.app')
@section('content')
<div class="container">
    <article id="opciones" style="background:linear-gradient(30deg,rgb(0, 0, 0),rgb(13, 80, 35),rgb(53, 114, 91), rgb(12, 165, 81), rgb(152, 240, 160), rgb(179, 253, 219))">
        <font color="black"> </font>
        <article class="arti"><a href="{{route('info.alumno')}}">Información del alumno</a> </article>
        <article class="arti"> <a href="{{route('lista.libros')}}">Consulta de Libros</article>
        <article class="arti"><a href="{{route('prestamo.libros')}}">Libros Prestados </article>
        <article class="arti"><a href="{{route('direccion.alumno')}}">Alta Alumno</article>
        <article class="menu"></article>
    </article>
</div>
@endsection