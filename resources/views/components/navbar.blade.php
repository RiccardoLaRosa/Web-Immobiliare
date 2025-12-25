<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-primary" href="/">ImmobiliLive</a>

        <div>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>

                <li class="nav-item"><a class="nav-link" href="{{route('properties.index')}}">Annunci</a></li>
                @auth
                <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <li class="ms-2"><button type="submit" class="btn btn-danger ms-1">Logout</button></li>
                    </form>
                @endauth
                @guest
                <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Registrati</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                @endguest
                <li class="nav-item"><a class="btn btn-primary ms-lg-3" href="{{route('properties.create')}}">+ Nuovo Annuncio</a></li>
            </ul>
        </div>
    </div>
</nav>