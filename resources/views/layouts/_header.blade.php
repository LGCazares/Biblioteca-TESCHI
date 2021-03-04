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