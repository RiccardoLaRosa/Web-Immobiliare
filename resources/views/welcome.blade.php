<x-layout>


    <section class="section-premium-padding">
        <div class="fluid-blur-1"></div>
        <div class="container position-relative" style="z-index: 1;">
            <div class="row align-items-center g-5">
                <div class="col-lg-8">
                    <!-- Micro Badge Futuri -->
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill mb-4 mt-5"
                        style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);">
                        <span style="width: 6px; height: 6px; background: var(--neon-emerald); display: inline-block;"
                            class="rounded-circle animate-pulse"></span>
                        <span
                            style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--text-muted); font-weight: 600;">
                            Next-Gen Real Estate
                        </span>
                    </div>

                    <!-- Titolo d'Impatto Totale -->
                    <h1 class="huge-title mb-4">
                        Esplora i<br><span class="text-gradient-neon">Mercati.</span>
                    </h1>

                    <p class="mb-5 text-white"
                        style="font-size: 1.25rem; max-width: 550px; line-height: 1.6; font-weight: 300;">
                        Trova architetture straordinarie in vendita o in locazione. Inserisci una parola chiave per
                        iniziare l'esperienza virtuale.
                    </p>

                    <!-- Scatola di ricerca fluttuante "Glow" -->
                    <div class="p-3 rounded-4 search-glow-wrap" style="max-width: 700px;">
                        <x-filter-home :properties="$properties"></x-filter-home>
                    </div>

                    <div class="mt-3 d-flex gap-3 align-items-center opacity-70">
                        <span class="small text-white">Suggeriti:</span>
                        <span style="color: var(--neon-cyan); cursor:pointer;"
                            class="small fw-semibold">#AtticoMilano</span>
                        <span style="color: var(--neon-emerald); cursor:pointer;"
                            class="small fw-semibold">#DesignLoft</span>
                    </div>
                </div>

                <!-- Lato Destro: Widget interattivo astratto ispirato alla Dashboard Premium -->
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="glass-ux-card p-4 rounded-5 position-relative overflow-hidden"
                        style="border-top: 1px solid rgba(255,255,255,0.2);">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <span class="small text-white font-monospace">MARKET ACTIVITY</span>
                            <span style="color: var(--neon-emerald); font-size: 0.8rem;" class="fw-bold">+7.2% Questo
                                mese</span>
                        </div>
                        <div class="mb-3">
                            <span class="text-white small d-block">Prezzo Medio</span>
                            <h2 class="fw-black m-0" style="font-size: 2.2rem; letter-spacing: -1px;">€150k</h2>
                        </div>
                        <!-- Grafico Lineare Astratto fatto in SVG puro per l'effetto Tech -->
                        <svg viewBox="0 0 300 100" class="w-100" style="overflow: visible;">
                            <path d="M0,80 Q50,40 100,70 T200,30 T300,10" fill="none" stroke="url(#gradient-line)"
                                stroke-width="4" stroke-linecap="round" />
                            <path d="M0,80 Q50,40 100,70 T200,30 T300,10 L300,100 L0,100 Z" fill="url(#gradient-area)"
                                opacity="0.15" />
                            <circle cx="200" cy="30" r="6" fill="#FFFFFF" stroke="var(--neon-purple)"
                                stroke-width="3" />
                            <defs>
                                <linearGradient id="gradient-line" x1="0" y1="0" x2="1"
                                    y2="0">
                                    <stop offset="0%" stop-color="var(--neon-purple)" />
                                    <stop offset="100%" stop-color="var(--neon-cyan)" />
                                </linearGradient>
                                <linearGradient id="gradient-area" x1="0" y1="0" x2="0"
                                    y2="1">
                                    <stop offset="0%" stop-color="var(--neon-purple)" />
                                    <stop offset="100%" stop-color="transparent" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- STATISTICHE: BLOCCHI DI LUCE INTEGRATI --}}
    <section style="padding: 60px 0; border-top: 1px solid var(--border-glass); border-bottom: 1px solid var(--border-glass); background: rgba(255,255,255,0.01);" class="container">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3" style="border-right: 1px solid rgba(255,255,255,0.05);">
                    <span class="text-white small text-uppercase tracking-wider d-block mb-1">Immobili Totali</span>
                    <span class="fw-black"
                        style="font-size: 2.5rem; color: var(--text-pure); font-feature-settings: 'tnum';">120</span>
                </div>
                <div class="col-6 col-md-3" style="border-right: 1px solid rgba(255,255,255,0.05);">
                    <span class="text-white small text-uppercase tracking-wider d-block mb-1">Agenti Attivi</span>
                    <span class="fw-black"
                        style="font-size: 2.5rem; color: var(--neon-cyan); font-feature-settings: 'tnum';">85</span>
                </div>
                <div class="col-6 col-md-3" style="border-right: 1px solid rgba(255,255,255,0.05);">
                    <span class="text-white small text-uppercase tracking-wider d-block mb-1">Volume Vendite</span>
                    <span class="fw-black"
                        style="font-size: 2.5rem; color: var(--text-pure); font-feature-settings: 'tnum';">50M+</span>
                </div>
                <div class="col-6 col-md-3">
                    <span class="text-white small text-uppercase tracking-wider d-block mb-1">Nuovi questa
                        settimana</span>
                    <span class="fw-black"
                        style="font-size: 2.5rem; color: var(--neon-emerald); font-feature-settings: 'tnum';">30</span>
                </div>
            </div>
        </div>
    </section>


    {{-- MAPPA PANORAMICA --}}
    <section class="pt-5" style="padding: 30px 0; background: var(--bg-light); position: relative;">
        <div class="light-blur-1" style="top: 10%; left: 30%; opacity: 0.6;"></div>

        <div class="container position-relative" style="z-index: 1;">

            <!-- Intestazione della Mappa -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="p-2.5 rounded-3 d-flex align-items-center justify-content-center"
                        style="background: #FFFFFF; border: 1px solid var(--border-glass-light); box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                        <i class="ti ti-map-pin p-2" style="font-size: 30px; color: var(--neon-purple);"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold m-0"
                            style="font-size: 1.25rem; letter-spacing: -0.3px; color: var(--text-dark-main);">
                            Geolocalizzazione Asset</h4>
                        <p class="text-white small m-0">Esplora visivamente la densità e la posizione dei nostri
                            immobili sul territorio</p>
                    </div>
                </div>

                <!-- Switch filtri rapido sulla mappa -->
                <div class="d-none d-md-flex gap-2 p-1 rounded-pill"
                    style="background: rgba(15, 23, 42, 0.04); border: 1px solid var(--border-glass-light);">
                    <button class="btn btn-sm rounded-pill px-3 py-1 fw-semibold text-dark"
                        style="background: #FFFFFF; color: var(--text-dark-main); font-size: 0.75rem; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">Tutti</button>
                    <button class="btn btn-sm rounded-pill px-3 py-1 text-white"
                        style="background: transparent; font-size: 0.75rem;">In Vendita</button>
                    <button class="btn btn-sm rounded-pill px-3 py-1 text-white"
                        style="background: transparent; font-size: 0.75rem;">In Affitto</button>
                </div>
            </div>

            <!-- Il grande contenitore della Mappa per lungo -->
            <div class="crystal-ux-card rounded-5 p-3 position-relative overflow-hidden w-100" style="height: 420px;">

                {{-- MAPPA REALE (Iframe o Mapbox) --}}

                <div class="w-100 h-100 rounded-4 overflow-hidden position-relative"
                    style="border: 1px solid rgba(15,23,42,0.04);">

                    <iframe src="https://maps.google.com/maps?q=Milano&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        width="100%" height="100%" frameborder="0"
                        style="border:0; mix-blend-mode: multiply;"
                        allowfullscreen>
                    </iframe>

                    {{-- Overlay UI Interattivo fluttuante sopra la mappa --}}
                    <div class="position-absolute bottom-0 start-0 m-4 p-3 rounded-4 d-none id d-sm-block"
                        style="background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.6); box-shadow: 0 20px 40px rgba(15,23,42,0.08); max-width: 280px;">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span style="width: 8px; height: 8px; background: var(--neon-emerald);"
                                class="rounded-circle"></span>
                            <span style="font-size: 0.7rem; font-weight: 700; color: var(--text-dark-main);"
                                class="text-dark tracking-wider">Focus Area: Milano</span>
                        </div>
                        <p class="m-0 text-secondary" style="font-size: 0.8rem; line-height: 1.4;">
                            Ci sono attualmente <strong style="color: var(--text-dark-main);">42 immobili
                                disponibili</strong> in questa zona con un rating di vivibilità superiore al 92%.
                        </p>
                    </div>

                    {{-- Floating Action Button: Controllo Espansione --}}
                    <div class="position-absolute top-0 end-0 m-3">
                        <button class="btn d-flex align-items-center justify-content-center p-2 rounded-3 shadow-sm"
                            style="background: #FFFFFF; border: 1px solid var(--border-glass-light); color: var(--text-dark-main); transition: all 0.2s;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'">
                            <i class="ti ti-maximize" style="font-size: 18px;"></i>
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </section>



    {{-- RECENTI: CARD SHOWROOM --}}
    <section class="pt-5 pb-5">
        <div class="fluid-blur-2"></div>
        <div class="container position-relative" style="z-index: 1;">

            <div class="d-flex justify-content-between align-items-end mb-5">
                <div>
                    <h2 class="fw-bold m-0" style="font-size: 2.5rem; letter-spacing: -0.03em;">Nuove Acquisizioni
                    </h2>
                    <p class="text-white m-0 mt-2">Le ultime proprietà verificate entrate nel network</p>
                </div>
                <div class="d-none d-md-block">
                    <button class="btn px-4 py-2 rounded-pill fw-semibold"
                        style="background: rgba(255,255,255,0.05); border: 1px solid var(--border-glass); color: #fff; transition: background 0.3s;">
                        Mostra Galleria Completa
                    </button>
                </div>
            </div>

            <div class="row g-4">
                @foreach ($properties->take(3) as $property)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('properties.show', $property) }}">
                            <div class="glass-ux-card rounded-5 h-100 d-flex flex-column overflow-hidden p-3">

                            {{-- Immagine Contenuta con overlay scuro --}}
                            <div class="position-relative overflow-hidden rounded-4" style="height: 250px;">
                                @if ($property->images->isNotEmpty())
                                    <img src="{{ Storage::url($property->images->first()->path) }}"
                                        style="object-fit: cover; width: 100%; height: 100%;"
                                        alt="{{ $property->title }}">
                                @else
                                    <div class="w-100 h-100 d-flex align-items-center justify-content-center"
                                        style="background: linear-gradient(135deg, #1e1b4b, #311042);">
                                        <i class="ti ti-building"
                                            style="font-size: 40px; color: rgba(255,255,255,0.2);"></i>
                                    </div>
                                @endif

                                {{-- Pill di Stato Neon --}}
                                <div class="position-absolute top-0 start-0 m-3">
                                    @if ($property->status == 'Disponibile')
                                        <span class="badge rounded-pill px-3 py-1.5"
                                            style="background: rgba(0, 245, 160, 0.15); color: var(--neon-emerald); border: 1px solid rgba(0, 245, 160, 0.3); font-size: 11px; font-weight: 700; letter-spacing: 0.05em;">
                                            LIVE NOW
                                        </span>
                                    @else
                                        <span class="badge rounded-pill px-3 py-1.5"
                                            style="background: rgba(255,255,255,0.05); color: var(--text-muted); border: 1px solid var(--border-glass); font-size: 11px;">
                                            RISERVATO
                                        </span>
                                    @endif
                                </div>
                            </div>

                            {{-- Dettagli della proprietà --}}
                            <div class="p-3 d-flex flex-column flex-grow-1 mt-2">
                                <h4 class="fw-bold mb-2"
                                    style="font-size: 1.3rem; letter-spacing: -0.5px; line-height: 1.3;">
                                    {{ $property->title }}
                                </h4>

                                <p class="text-white small mb-4 line-clamp"
                                    style="line-height: 1.6; font-weight: 300;">
                                    {{ Str::limit($property->description, 80) }}
                                </p>

                                {{-- Bottone d'azione stile Dashboard con Bagliore al passaggio --}}
                                <div class="mt-auto pt-3" style="border-top: 1px solid rgba(255,255,255,0.04);">
                                    <a href="{{ route('properties.show', $property) }}"
                                        class="btn w-100 d-flex align-items-center justify-content-center gap-2 py-2.5 rounded-4 font-semibold text-decoration-none"
                                        style="background: rgba(255,255,255,0.04); border: 1px solid var(--border-glass); color: var(--text-pure); font-size: 0.9rem; transition: all 0.3s;">
                                        Vedi Spazio Esclusivo <i class="ti ti-arrow-up-right"
                                            style="font-size: 1.1rem; color: var(--neon-cyan);"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
