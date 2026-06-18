<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard – ImmobiliLive</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="d-flex container" style="min-height:100vh;">

        {{-- ── Sidebar ── --}}
        <div class="sidebar">
            <h3><a class="navbar-brand fw-bold text-white mt-4 border-bottom pb-2" href="/">Immobili<span
                        style="background: linear-gradient(90deg, #7C3AED, #188ea3); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Live</span></a>
            </h3>

            <div class="user-card mt-4">
                <div class="avatar"><i class="bi bi-person"></i></div>
                <div>
                    <div class="user-name">{{ auth()->user()->name }}</div>
                    <div class="user-role">Utente attivo</div>
                </div>
            </div>

            <a href="{{ route('dashboard') }}" class="nav-item-link {{ request()->is('dashboard') ? 'active' : '' }} fs-5">
                <i class="bi bi-grid-1x2"></i> Dashboard
            </a>
            <a href="{{ route('home') }}" class="nav-item-link {{ request()->is('properties*') ? 'active' : '' }} fs-5">
                <i class="bi bi-house"></i> Home </a>
            <a href="{{ route('properties.create') }}"
                class="nav-item-link {{ request()->is('properties/create') ? 'active' : '' }} fs-5">
                <i class="bi bi-plus-circle"></i> Nuovo annuncio
            </a>
            <a href="/profile" class="nav-item-link {{ request()->is('profile*') ? 'active' : '' }} fs-5">
                <i class="bi bi-person-circle"></i> Profilo
            </a>

            <form method="POST" action="{{ route('logout') }}" class="mt-auto">
                @csrf
                <button type="submit" class="logout-link border-0 bg-transparent w-100 text-start fs-5">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </div>

        {{-- ── Main content ── --}}
        <div class="flex-grow-1 p-4 p-md-5">

            <h1 class="fw-bold fs-4 mb-1" style="color:#1a1a2e;">
                Bentornato, {{ auth()->user()->name }}
            </h1>
            <h4 class="text-white mb-4">Ecco il riepilogo della tua attività</h4>

            {{-- Stat cards --}}
            <div class="row g-3 mb-0">
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="stat-icon blue"><i class="bi bi-building"></i></div>
                        <div>
                            <div class="stat-val">{{ auth()->user()->properties->count() }}</div>
                            <div class="stat-label">Annunci attivi</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="stat-icon teal"><i class="bi bi-eye"></i></div>
                        <div>
                            <div class="stat-val">{{ rand(50, 100) }}</div>
                            <div class="stat-label">Visualizzazioni totali</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <div class="stat-icon pink"><i class="bi bi-heart"></i></div>
                        <div>
                            <div class="stat-val">{{ rand(0, auth()->user()->properties->count()) }}</div>
                            <div class="stat-label">Preferiti</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Recent listings --}}
            <div class="listings-card">
                <div class="listings-title">I tuoi annunci recenti</div>



                {{-- Livewire components --}}
                <livewire-edit-properties></livewire-edit-properties>
                <livewire-dashboard-list></livewire-dashboard-list>
            </div>

        </div>
</body>

</html>
