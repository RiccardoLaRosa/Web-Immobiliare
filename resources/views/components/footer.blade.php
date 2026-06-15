<footer style="background: linear-gradient(135deg, #0a2342 0%, #185FA5 100%); color: #fff; padding: 48px 0 24px;" class="rounded-top-3">
    <div class="container">
        <div class="row g-4 pb-4" style="border-bottom: 1px solid rgba(255,255,255,0.12);">

            <div class="col-md-4">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <i class="ti ti-building-estate" style="font-size: 24px; color: rgba(255,255,255,0.8);"></i>
                    <span class="fw-semibold" style="font-size: 18px;">ImmobiliLive</span>
                </div>
                <p style="opacity: 0.7; font-size: 14px; line-height: 1.7;">
                    Il tuo punto di riferimento per comprare, vendere e affittare immobili in tutta Italia.
                </p>
            </div>

            <div class="col-md-4">
                <h6 class="fw-semibold mb-3" style="opacity: 0.5; font-size: 11px; letter-spacing: 1px; text-transform: uppercase;">Link utili</h6>
                <ul class="list-unstyled d-flex flex-column gap-2">
                    <li><a href="{{ route('home') }}" class="text-decoration-none" style="color: rgba(255,255,255,0.8); font-size: 14px;">Home</a></li>
                    <li><a href="{{ route('properties.index') }}" class="text-decoration-none" style="color: rgba(255,255,255,0.8); font-size: 14px;">Annunci</a></li>
                    <li><a href="{{ route('properties.create') }}" class="text-decoration-none" style="color: rgba(255,255,255,0.8); font-size: 14px;">Pubblica annuncio</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h6 class="fw-semibold mb-3" style="opacity: 0.5; font-size: 11px; letter-spacing: 1px; text-transform: uppercase;">Seguici</h6>
                <div class="d-flex flex-column gap-2">
                    <a href="#" class="text-decoration-none d-flex align-items-center gap-2" style="color: rgba(255,255,255,0.8); font-size: 14px;">
                        <i class="ti ti-brand-facebook" style="font-size: 18px;"></i> Facebook
                    </a>
                    <a href="#" class="text-decoration-none d-flex align-items-center gap-2" style="color: rgba(255,255,255,0.8); font-size: 14px;">
                        <i class="ti ti-brand-instagram" style="font-size: 18px;"></i> Instagram
                    </a>
                    <a href="#" class="text-decoration-none d-flex align-items-center gap-2" style="color: rgba(255,255,255,0.8); font-size: 14px;">
                        <i class="ti ti-brand-x" style="font-size: 18px;"></i> Twitter / X
                    </a>
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-between align-items-center pt-3">
            <small style="opacity: 0.5; font-size: 13px;">© {{ date('Y') }} ImmobiliLive. Tutti i diritti riservati.</small>
            <div class="d-flex gap-3">
                <a href="#" class="text-decoration-none" style="color: rgba(255,255,255,0.5); font-size: 13px;">Privacy</a>
                <a href="#" class="text-decoration-none" style="color: rgba(255,255,255,0.5); font-size: 13px;">Termini</a>
            </div>
        </div>
    </div>
</footer>