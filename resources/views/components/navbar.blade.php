<nav class="navbar navbar-expand-lg shadow-sm rounded-3" style="background:#fff; border-bottom:1px solid rgba(0,0,0,0.08); min-height:72px;">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center gap-2 fw-semibold" href="{{ route('home') }}" style="font-size:20px; color:#0d1b2a;">
            <i class="bi bi-buildings"></i>
            ImmobiliLive
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-1">
                <li class="nav-item">
                    <a class="nav-link rounded-3 px-3" href="{{ route('home') }}" style="font-size:15px;">
                        <i class="ti ti-home me-1" style="vertical-align:-2px;"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-3 px-3" href="{{ route('properties.index') }}" style="font-size:15px;">
                        <i class="ti ti-list me-1" style="vertical-align:-2px;"></i>Annunci
                    </a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link rounded-3 px-3" href="{{ route('dashboard') }}" style="font-size:15px;">
                        <i class="ti ti-layout-dashboard me-1" style="vertical-align:-2px;"></i>Dashboard
                    </a>
                </li>
                @endauth
            </ul>

            <div class="d-flex align-items-center gap-2">
                @guest
                    <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-sm px-4" style="font-size:14px;">Registrati</a>
                    <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-sm px-4" style="font-size:14px;">Login</a>
                @endguest
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="m-0">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm px-4" style="font-size:14px;">Logout</button>
                    </form>
                @endauth
                <div style="width:1px; height:24px; background:rgba(0,0,0,0.1);"></div>
                <a href="{{ route('properties.create') }}" class="btn btn-primary btn-sm d-flex align-items-center gap-2 px-4" style="font-size:14px; font-weight:500;">
                    <i class="ti ti-plus" style="font-size:16px;"></i> Nuovo annuncio
                </a>
            </div>
        </div>

    </div>
</nav>