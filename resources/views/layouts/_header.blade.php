<header>
    <nav style="background:linear-gradient(30deg,rgb(0, 0, 0), rgb(13, 80, 35),rgb(53, 114, 91), rgb(12, 165, 81), rgb(152, 240, 160), rgb(179, 253, 219))" class="navbar navbar-expand-lg navbar-light ">
        <a href="{{route('/')}}" style="color: white;" class="navbar-brand">INICIO</a>
        <div>
            @auth
            {{auth()->user()->nombre}} <br>
            {{auth()->user()->email}}
            @endauth
            @guest
            <a style="color: white" href="{{route('login')}}">Iniciar sesion</a>
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
    <img class="logo" src="{{asset('imagen/teschi_logo.png')}}" alt="imagen 1">
    <img class="tec" src="{{asset('imagen/tecnm.png')}}" alt="imagen 2">

</section>


<section class="sistema"> Sistema de Biblioteca Escolar </section>

