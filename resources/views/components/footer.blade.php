<footer class="py-3 mt-5 rounded-top-4 container glass-ux-card " style="background-color: #c9c9c9;">
    <div class="container">
        
        <!-- Sezione Link Principali -->
        <div class="row g-4 pb-4 mt-1">
            
            <!-- Colonna Info Base -->
            <div class="col-md-6">
                <span class="fw-bold text-dark fs-5">
                    Immobili<span class="fw-bold" style="color: #2600d1;">Live</span>
                </span>
                <p class="text-dark small mt-2 mb-0" style="max-width: 320px;">
                    Trova e pubblica annunci immobiliari in modo semplice e immediato su tutto il territorio.
                </p>
            </div>

            <!-- Colonna Link Rapidi -->
            <div class="col-6 col-md-3">
                <h6 class="text-uppercase text-muted fw-bold small mb-3" style="letter-spacing: 0.05em; font-size: 11px;">Naviga</h6>
                <div class="d-flex flex-column gap-2">
                    <a href="{{ route('home') }}" class="text-dark text-decoration-none small text-dark-hover">Home</a>
                    <a href="{{ route('properties.index') }}" class="text-dark text-decoration-none small text-dark-hover">Annunci</a>
                    <a href="{{ route('properties.create') }}" class="text-dark text-decoration-none small text-dark-hover">Pubblica</a>
                </div>
            </div>

            <!-- Colonna Social -->
            <div class="col-6 col-md-3">
                <h6 class="text-uppercase text-muted fw-bold small mb-3" style="letter-spacing: 0.05em; font-size: 11px;">Social</h6>
                <div class="d-flex flex-column gap-2">
                    <a href="#" class="text-dark text-decoration-none small text-dark-hover">Instagram</a>
                    <a href="#" class="text-dark text-decoration-none small text-dark-hover">Facebook</a>
                    <a href="#" class="text-dark text-decoration-none small text-dark-hover">Twitter / X</a>
                </div>
            </div>

        </div>

        <!-- Linea di chiusura inferiore -->
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center pt-3 border-top border-dark">
            <small class="text-muted">
                &copy; {{ date('Y') }} ImmobiliLive. Tutti i diritti riservati.
            </small>
            <div class="d-flex gap-3 mt-2 mt-sm-0">
                <a href="#" class="text-muted small text-decoration-none">Privacy</a>
                <a href="#" class="text-muted small text-decoration-none">Termini</a>
            </div>
        </div>

    </div>
</footer>