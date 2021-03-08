<header>
    <nav style="background-color:#91C470; color:aliceblue;" class="navbar navbar-expand-lg navbar-light ">
        <a href="{{route('/')}}" style="color: white;" class="navbar-brand">INICIO</a>
        <div>
            @auth
            {{auth()->user()->nombre}} <br>
            {{auth()->user()->email}}
            @endauth
            @guest
            <a style="color: white" href="">Iniciar sesion</a>
            <a style="color: white" href="{{route('registrate')}}">Registrate</a>
            @else
            <li>
                <a style="color: black" href="#" >Cerrar sesion</a>
            </li>
            @endguest
            
        </div>
    </nav>
</header>
<section class="section">
    TECNOLÓGICO DE ESTUDIOS SUPERIORES DE CHIMALHUACÁN
    <img class="logo" src="imagen/teschi logo.png" alt="imagen 1">
    <img class="tec" src="imagen/tecnm.png" alt="imagen 2">

</section>


<section class="sistema"> Sistema de Biblioteca Escolar </section>
