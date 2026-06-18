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
    <div class="container mt-5 mb-5 pb-5 shadow rounded-4 bg-white overflow-hidden p-0">
        <div class="d-flex flex-column flex-lg-row w-100" style="min-height: 85vh;">

            {{-- Sidebar  --}}
            <div class="bg-dark text-white p-4 d-flex flex-column justify-content-between col-12 col-lg-4 col-xl-3 rounded-bottom-5" style="background-color: #111827 !important;">
                <div>
                    <div class="text-center text-lg-start mb-4">
                        <a class="navbar-brand fw-bold fs-3 text-white pb-2 d-inline-block" href="/">
                            Immobili<span style="background: linear-gradient(90deg, #7C3AED, #188ea3); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Live</span>
                        </a>
                        <hr class="text-muted opacity-25 d-none d-lg-block">
                    </div>

                    <div class="d-flex align-items-center gap-3 p-3 bg-secondary bg-opacity-10 rounded-4 mb-4 border border-secondary border-opacity-25">
                        <div class="bg-primary bg-opacity-20 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            <i class="bi bi-person fs-3 text-white"></i>
                        </div>
                        <div>
                            <div class="fw-bold text-white text-truncate" style="max-width: 130px;">{{ auth()->user()->name }}</div>
                            <div class="text-muted small"><span class="badge bg-success bg-opacity-20 text-white p-1 font-monospace" style="font-size: 10px;">ONLINE</span></div>
                        </div>
                    </div>

                    <nav class="nav flex-column">
                        <a href="{{ route('dashboard') }}" class="nav-item-link {{ request()->is('dashboard') ? 'active' : '' }}">
                            <i class="bi bi-grid-1x2"></i> Dashboard
                        </a>
                        <a href="{{ route('home') }}" class="nav-item-link {{ request()->is('properties*') ? 'active' : '' }}">
                            <i class="bi bi-house"></i> Home
                        </a>
                        <a href="{{ route('properties.create') }}" class="nav-item-link {{ request()->is('properties/create') ? 'active' : '' }}">
                            <i class="bi bi-plus-circle"></i> Nuovo annuncio
                        </a>
                        <a href="/profile" class="nav-item-link {{ request()->is('profile*') ? 'active' : '' }}">
                            <i class="bi bi-person-circle"></i> Profilo
                        </a>
                    </nav>
                </div>

                <form method="POST" action="{{ route('logout') }}" class="mt-4 mt-lg-auto border-top border-secondary border-opacity-25 pt-3">
                    @csrf
                    <button type="submit" class="logout-link border-0 bg-transparent w-100 text-start d-flex align-items-center gap-2">
                        <i class="bi bi-box-arrow-right fs-5"></i> <span>Logout</span>
                    </button>
                </form>
            </div>

            {{-- ── Main Content Area ── --}}
            <div class="flex-grow-1 p-4 p-md-5 bg-light bg-opacity-50">

                <div class="mb-5">
                    <h1 class="fw-extrabold mb-1" style="color: #1e293b; font-size: 2.25rem;">
                        Bentornato, <span class="text-primary fw-bold">{{ auth()->user()->name }}</span> 
                    </h1>
                    <p class="text-secondary fs-5 mb-0">Ecco il riepilogo in tempo reale della tua attività</p>
                </div>

                {{-- Griglia Card Statistiche --}}
                <div class="row g-4 mb-5">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card custom-stat-card p-4 shadow-sm">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-muted small text-uppercase fw-bold tracking-wider">Annunci Attivi</span>
                                    <h2 class="text-dark mt-2 mb-0 display-6 fw-bold">{{ auth()->user()->properties->count() }}</h2>
                                </div>
                                <div class="stat-icon-wrapper bg-primary bg-opacity-10 text-primary">
                                    <i class="bi bi-building"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card custom-stat-card p-4 shadow-sm">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-muted small text-uppercase fw-bold tracking-wider">Visualizzazioni</span>
                                    <h2 class="text-dark mt-2 mb-0 display-6 fw-bold">{{ rand(50, 100) }}</h2>
                                </div>
                                <div class="stat-icon-wrapper bg-info bg-opacity-10 text-info">
                                    <i class="bi bi-eye"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card custom-stat-card p-4 shadow-sm">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text-muted small text-uppercase fw-bold tracking-wider">Preferiti</span>
                                    <h2 class="text-dark mt-2 mb-0 display-6 fw-bold">{{ rand(0, auth()->user()->properties->count()) }}</h2>
                                </div>
                                <div class="stat-icon-wrapper bg-danger bg-opacity-10 text-danger">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sezione Annunci Recenti  --}}
                <div class="card border-0 shadow-sm rounded-4 p-4 bg-white">
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <div class="bg-dark rounded-3 text-white d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                            <i class="bi bi-collection-play"></i>
                        </div>
                        <h3 class="fw-bold text-dark m-0 fs-4">I tuoi annunci recenti</h3>
                    </div>

                    {{-- Livewire Content Wrapper --}}
                    <div class="bg-light p-3 rounded-4 border border-light-subtle">
                        <livewire-edit-properties></livewire-edit-properties>
                        <livewire-dashboard-list></livewire-dashboard-list>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>