@extends('layouts.app')
@section('content')
<div class="container">

    <div class="div_verde">
        <article id="opciones">
            <font color="black"> </font>
            <article class="arti"><a href="">Información del alumno</a> </article>
            <article class="arti"> <a href="{{route('lista.libros')}}">Consulta de Libros</article>
            <article class="arti"><a href="">Libros Prestados </article>
            <article class="arti"><a href="{{route('store.alumno')}}">Alta Alumno</article>
            <article class="menu"></article>
        </article>
    </div>
    <div>
        <p>ubicacion</p>
        <iframe width="100%" height="270" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=19.4131177977268,%20-98.92742592327279&t=&z=16&ie=UTF8&iwloc=&output=embed"></iframe>
    </div>
</div>

@endsection