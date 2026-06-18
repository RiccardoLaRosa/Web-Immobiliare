<x-layout>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <div class="container my-5" style="margin-top: 120px !important;">
        <div class="row g-4 justify-content-center">
            
            <div class="col-12 col-lg-8">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden bg-white">
                    
                    {{-- Immagine con badge di stato --}}
                    <div class="position-relative overflow-hidden" style="height: 450px;">
                        @if ($property->images->isNotEmpty())
                            <img src="{{ Storage::url($property->images->first()->path) }}"
                                 class="w-100 h-100"
                                 style="object-fit: cover; transition: transform 0.5s ease;"
                                 onmouseover="this.style.transform='scale(1.03)'"
                                 onmouseout="this.style.transform='scale(1)'">
                        @else
                            <div class="bg-secondary w-100 h-100 d-flex flex-column justify-content-center align-items-center text-white">
                                <i class="bi bi-image fs-1 mb-2"></i>
                                <span class="fw-semibold">Nessuna Immagine Disponibile</span>
                            </div>
                        @endif

                        {{-- Badge Stato Dinamico --}}
                        <span class="position-absolute top-0 end-0 m-4 badge {{ $property->status == 'Disponibile' ? 'bg-success' : 'bg-danger' }} px-4 py-2 fs-6 rounded-pill shadow-sm fw-bold">
                            <i class="bi {{ $property->status == 'Disponibile' ? 'bi-check-circle-fill' : 'bi-dash-circle-fill' }} me-2"></i>{{ $property->status }}
                        </span>
                    </div>

                    {{-- Contenuto Scheda --}}
                    <div class="card-body p-4 p-md-5">
                        <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                            <span class="badge bg-light text-primary px-3 py-2 rounded-pill fw-semibold border border-primary-subtle">
                                <i class="bi bi-geo-alt-fill me-1"></i> {{ $property->city }}
                            </span>
                        </div>

                        <h1 class="fw-extrabold text-dark mb-4 display-6">{{ $property->title }}</h1>

                        <div class="row g-3 p-4 bg-light rounded-4 mb-4 border border-1 border-light-subtle text-center text-sm-start">
                            <div class="col-12 col-sm-4 d-flex align-items-center justify-content-center justify-content-sm-start gap-3">
                                <div class="bg-primary bg-opacity-10 text-primary rounded-3 p-3 fs-3">
                                    <i class="bi bi-superscript"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Superficie</small>
                                    <h5 class="fw-bold mb-0 text-dark">{{ $property->sqm }} mq</h5>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4 d-flex align-items-center justify-content-center justify-content-sm-start gap-3 border-sm-start border-md-2">
                                <div class="bg-primary bg-opacity-10 text-primary rounded-3 p-3 fs-3">
                                    <i class="bi bi-door-open"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Locali</small>
                                    <h5 class="fw-bold mb-0 text-dark">{{ $property->rooms }} {{ $property->rooms == 1 ? 'Stanza' : 'Stanze' }}</h5>
                                </div>
                            </div>

                            <div class="col-12 col-sm-4 d-flex align-items-center justify-content-center justify-content-sm-start gap-3 border-sm-start border-md-2">
                                <div class="bg-primary bg-opacity-10 text-primary rounded-3 p-3 fs-3">
                                    <i class="bi bi-building"></i>
                                </div>
                                <div>
                                    <small class="text-muted d-block text-uppercase fw-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">Località</small>
                                    <h5 class="fw-bold mb-0 text-dark">{{ $property->city }}</h5>
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold text-dark mb-3">Descrizione dell'immobile</h4>
                        <p class="text-secondary lh-lg fs-5" style="text-align: justify;">
                            {{ $property->description }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card border-0 shadow-lg rounded-4 p-4 text-center sticky-lg-top bg-white" style="top: 120px; z-index: 10;">
                    
                    {{-- Avatar Agente --}}
                    <div class="position-relative d-inline-block mx-auto mb-3">
            <div class="d-flex align-items-center justify-content-center rounded-circle" style="width: 100px; height: 100px; background: linear-gradient(135deg, #7C3AED, #06B6D4);">
                <i class="ti ti-building" style="font-size: 50px; color: #FFF;"></i>
            </div>
                        <span class="position-absolute bottom-0 end-0 bg-success border border-2 border-white rounded-circle p-2" title="Online adesso"></span>
                    </div>

                    <h4 class="fw-bold text-dark mb-1">Immobili Live</h4>
                    <p class="text-muted small mb-4"><i class="bi bi-shield-check text-primary me-1"></i> Agenzia Partner Certificata</p>
                    
                    <hr class="text-muted opacity-25 my-3">

                    <div class="text-start mb-4">
                        <a href="tel:+393{{ rand(1000000, 9999999) }}" class="d-flex align-items-center text-decoration-none text-dark p-3 rounded-3 bg-light hover-bg mb-2 transition">
                            <i class="bi bi-telephone-fill text-success fs-4 me-3"></i>
                            <div>
                                <small class="text-muted d-block" style="font-size: 0.75rem;">Telefono Agente</small>
                                <span class="fw-bold">+39 3{{ rand(10, 99) }} {{ rand(100, 999) }} {{ rand(1000, 9999) }}</span>
                            </div>
                        </a>
                        
                        <div class="d-flex align-items-center p-3 rounded-3 bg-light">
                            <i class="bi bi-envelope-at-fill text-primary fs-4 me-3"></i>
                            <div>
                                <small class="text-muted d-block" style="font-size: 0.75rem;">Email per info</small>
                                <span class="fw-semibold text-break">info@immobililive.it</span>
                            </div>
                        </div>
                    </div>

                    <h5 class="fw-bold text-start mb-3 fs-6">Richiedi una visita gratuita</h5>
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-2">
                            <input type="text" class="form-control form-control-sm rounded-3" placeholder="Il tuo nome e cognome" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control form-control-sm rounded-3" placeholder="La tua email" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 rounded-3 fw-bold py-2 shadow-sm transition">
                            <i class="bi bi-send-fill me-2"></i>Invia Messaggio
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-layout>