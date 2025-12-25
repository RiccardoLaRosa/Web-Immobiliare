<x-layout>

    {{-- HERO SECTION --}}
    <section class="bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h1 class="display-5 fw-bold">Compra o Vendi il tuo Immobile</h1>
                    <p class="lead">Trova la tua prossima casa in vendita o in affitto vicino a te. Inserisci una città o una parola chiave.</p>

                    <x-filter-home :properties="$properties"></x-filter-home>

                    <small class="text-light mt-2 d-block">Consigli: prova "Bilocale", "Residence", "Milano"</small>
                </div>
                <div class="col-md-5 text-center">
                    <img src="{{ asset('image/logo.png') }}" class="img-fluid w-75" alt="Logo">
                </div>
            </div>
        </div>
    </section>

    {{-- BANNER PROMO --}}
    <section class="py-5 text-center bg-light">
        <div class="container">
            <h2 class="fw-bold mb-3">Offerte Speciali</h2>
            <p class="text-muted mb-4">Scopri le migliori proposte immobiliari del mese</p>
            <a href="#" class="btn btn-primary btn-lg">Scopri Ora</a>
        </div>
    </section>

    {{-- STATISTICHE --}}
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <div class="p-4 shadow rounded-4 shadow-hover">
                        <i class="bi bi-house-door-fill fs-1 text-primary"></i>
                        <h3 class="mt-2">120</h3>
                        <p>Immobili</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-4 shadow rounded-4">
                        <i class="bi bi-people-fill fs-1 text-primary"></i>
                        <h3 class="mt-2">85</h3>
                        <p>Utenti registrati</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-4 shadow rounded-4">
                        <i class="bi bi-tags-fill fs-1 text-primary"></i>
                        <h3 class="mt-2">50</h3>
                        <p>Vendite completate</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-4 shadow rounded-4">
                        <i class="bi bi-calendar-check-fill fs-1 text-primary"></i>
                        <h3 class="mt-2">30</h3>
                        <p>Nuovi annunci</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- IMMOBILI RECENTI --}}
    <section class="py-5 bg-light">
        <div class="container">

            <h2 class="fw-bold mb-4">Immobili Recenti</h2>

            <div class="row g-4">
                @foreach ($properties->take(6) as $property)
                    <div class="col-md-4">

                        <div class="card h-100 shadow-sm rounded-4 hover-shadow">

                            @if ($property->image)
                                <img src="{{ asset('storage/' . $property->image) }}" class="card-img-top"
                                    style="height:200px; object-fit:cover;" alt="{{ $property->title }}">
                            @endif

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $property->title }}</h5>
                                <p class="card-text text-truncate">{{ Str::limit($property->description, 80) }}</p>
                                <div class="mt-auto d-flex justify-content-between align-items-center">
                                    @if ($property->status == 'Disponibile')
                                        <span class="badge bg-success">{{$property->status}}</span>
                                    @else
                                        <span class="badge bg-secondary">{{$property->status}}</span>
                                    @endif
                                    <a href="#" class="btn btn-primary btn-sm">Dettagli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

</x-layout>
