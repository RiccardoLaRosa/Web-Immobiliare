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
            <div class="sidebar-brand">
                <i class="bi bi-buildings"></i> ImmobiliLive
            </div>

            <div class="user-card">
                <div class="avatar"><i class="bi bi-person"></i></div>
                <div>
                    <div class="user-name">{{ auth()->user()->name }}</div>
                    <div class="user-role">Utente attivo</div>
                </div>
            </div>

            <a href="{{ route('dashboard') }}" class="nav-item-link {{ request()->is('dashboard') ? 'active' : '' }}">
                <i class="bi bi-grid-1x2"></i> Dashboard
            </a>
            <a href="{{ route('home') }}" class="nav-item-link {{ request()->is('properties*') ? 'active' : '' }}">
                <i class="bi bi-house"></i> Home </a>
            <a href="{{ route('properties.create') }}" class="nav-item-link {{ request()->is('properties/create') ? 'active' : '' }}">
                <i class="bi bi-plus-circle"></i> Nuovo annuncio
            </a>
            <a href="/profile" class="nav-item-link {{ request()->is('profile*') ? 'active' : '' }}">
                <i class="bi bi-person-circle"></i> Profilo
            </a>

            <form method="POST" action="{{ route('logout') }}" class="mt-auto">
                @csrf
                <button type="submit" class="logout-link border-0 bg-transparent w-100 text-start">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </div>

        {{-- ── Main content ── --}}
        <div class="flex-grow-1 p-4 p-md-5">

            <h1 class="fw-bold fs-4 mb-1" style="color:#1a1a2e;">
                Bentornato, {{ auth()->user()->name }}
            </h1>
            <p class="text-secondary mb-4">Ecco il riepilogo della tua attività</p>

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
