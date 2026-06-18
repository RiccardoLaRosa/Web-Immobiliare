
<nav class="navbar navbar-expand-lg fixed-top crystal-navbar container rounded-4 mt-3 p-0">
    <div class="container">

        <!-- BRAND / LOGO: Trattamento Tipografico d'Autore -->
        <a class="navbar-brand d-flex align-items-center gap-2 fw-extrabold" href="{{ route('home') }}" style="font-size: 22px; color: #0F172A; letter-spacing: -0.04em;">
            <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 32px; height: 32px; background: linear-gradient(135deg, #7C3AED, #06B6D4);">
                <i class="ti ti-building" style="font-size: 18px; color: #FFF;"></i>
            </div>
            Immobili<span style="background: linear-gradient(90deg, #7C3AED, #188ea3); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Live</span>
        </a>

        <!-- Toggler Menu Mobile customizzato per non rompere il minimalismo -->
        <button class="navbar-toggler border-0 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" style="background: rgba(15,23,42,0.04); border-radius: 8px;">
            <i class="ti ti-menu-2" style="color: #0F172A; font-size: 22px;"></i>
        </button>

        <!-- Menu di Navigazione -->
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2 ms-lg-4">
                <li class="nav-item">
                    <a class="nav-link rounded-3 px-3 py-2 ux-nav-link d-inline-flex align-items-center gap-2" href="{{ route('home') }}" style="font-size: 16px;">
                        <i class="ti ti-smart-home" style="font-size: 16px;"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-3 px-3 py-2 ux-nav-link d-inline-flex align-items-center gap-2" href="{{ route('properties.index') }}" style="font-size: 16px;">
                        <i class="ti ti-search" style="font-size: 16px;"></i> Annunci
                    </a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link rounded-3 px-3 py-2 ux-nav-link d-inline-flex align-items-center gap-2" href="{{ route('dashboard') }}" style="font-size: 16px;">
                        <i class="ti ti-layout-dashboard" style="font-size: 16px;"></i> Dashboard
                    </a>
                </li>
                @endauth
            </ul>

            <!-- Area Utente & Call to Action -->
            <div class="d-flex align-items-center gap-3 flex-wrap mt-3 mt-lg-0">
                
                @guest
                    <a href="{{ route('login') }}" class="btn btn-sm px-3 py-2 btn-crystal-secondary rounded-3" style="font-size: 13.5px;">Accedi</a>
                    <a href="{{ route('register') }}" class="btn btn-sm px-3 py-2 btn-crystal-secondary rounded-3" style="font-size: 13.5px; background: rgba(15,23,42,0.03);">Registrati</a>
                @endguest
                
                @auth
                    <form action="{{ route('logout') }}" method="POST" class="m-0">
                        @csrf
                        <button type="submit" class="btn btn-sm px-3 py-2 btn-crystal-secondary rounded-3 text-danger" style="font-size: 13.5px; border-color: rgba(220, 53, 69, 0.15); background: rgba(220, 53, 69, 0.02);">
                            <i class="ti ti-logout" style="vertical-align: -1px;"></i> Esci
                        </button>
                    </form>
                @endauth
                
                <!-- Separatore Verticale Minimal -->
                <div class="d-none d-lg-block" style="width: 1px; height: 20px; background: rgba(15, 23, 42, 0.08);"></div>
                
                <!-- Bottone CTA Principale -->
                <a href="{{ route('properties.create') }}" class="btn btn-sm d-inline-flex align-items-center gap-2 px-4 py-2.5 btn-crystal-action rounded-3" style="font-size: 13.5px;">
                    <i class="ti ti-plus" style="font-size: 15px; color: #06B6D4;"></i> Pubblica Annuncio
                </a>
            </div>
        </div>

    </div>
</nav>