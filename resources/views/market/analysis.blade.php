<x-layout>
    <section class="py-5 position-relative mt-5">
        <div class="container position-relative" style="z-index: 1;">

            <!-- Intestazione -->
            <div class="mb-5 mt-5">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-3"
                    style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);">
                    <span style="width: 6px; height: 6px; background: var(--neon-cyan); display: inline-block;"
                        class="rounded-circle animate-pulse"></span>
                    <span
                        style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.15em; color: var(--text-muted); font-weight: 600;">
                        Market Intelligence
                    </span>
                </div>
                <h2 class="fw-bold m-0 text-white" style="font-size: 2.5rem; letter-spacing: -0.03em;">
                    Dati Analitici <span class="text-gradient-neon">Mercati Reali</span>
                </h2>
                <p class="text-white opacity-70 m-0 mt-2">Monitoraggio in tempo reale dei macro-trend e dell'indice di
                    domanda di mercato.</p>
            </div>

            <div class="row g-4">

                <!-- KPI & Mini Analytics -->
                <div class="col-lg-5">
                    <div class="d-flex flex-column gap-4 h-100">

                        <!-- Card 1: Indice di Assorbimento -->
                        <div class="glass-ux-card p-4 rounded-5" style="border-top: 1px solid rgba(255,255,255,0.12);">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <span
                                        class="text-white opacity-60 small text-uppercase font-monospace d-block mb-1">Indice
                                        Assorbimento</span>
                                    <h3 class="fw-black text-white m-0" style="font-size: 2rem; letter-spacing: -1px;">
                                        84.2%</h3>
                                </div>
                                <span
                                    style="color: var(--neon-emerald); background: rgba(0, 245, 160, 0.1); font-size: 0.8rem;"
                                    class="px-2 py-2 rounded-pill fw-bold">
                                    <i class="ti ti-arrow-up-right"></i> +3.1%
                                </span>
                            </div>
                            <p class="small text-white opacity-50 m-0">Velocità media di conversione da annuncio
                                pubblicato a trattativa riservata.</p>
                        </div>

                        <!-- Card 2: Rendimento Medio Nazionale -->
                        <div class="glass-ux-card p-4 rounded-5" style="border-top: 1px solid rgba(255,255,255,0.12);">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <span
                                        class="text-white opacity-60 small text-uppercase font-monospace d-block mb-1">Rendimento
                                        Annualizzato</span>
                                    <h3 class="fw-black text-white m-0" style="font-size: 2rem; letter-spacing: -1px;">
                                        5.8%</h3>
                                </div>
                                <span
                                    style="color: var(--neon-cyan); background: rgba(0, 245, 255, 0.1); font-size: 0.8rem;"
                                    class="px-2 py-2 rounded-pill fw-bold">
                                    Stabile
                                </span>
                            </div>
                            <p class="small text-white opacity-50 m-0">Ritorno medio generato sugli asset a reddito e
                                locazioni di breve termine.</p>
                        </div>

                        <!-- Card 3: Premium Demand Index -->
                        <div class="glass-ux-card p-4 rounded-5" style="border-top: 1px solid rgba(255,255,255,0.12);">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <span
                                        class="text-white opacity-60 small text-uppercase font-monospace d-block mb-1">Indice
                                        di domanda premium</span>
                                    <h3 class="fw-black m-0"
                                        style="font-size: 2rem; letter-spacing: -1px; color: var(--neon-purple);">
                                        94.8<span class="small opacity-50" style="font-size: 1rem;">/100</span></h3>
                                </div>
                                <span
                                    style="color: var(--neon-purple); background: rgba(168, 85, 247, 0.1); font-size: 0.8rem;"
                                    class="px-2 py-2 rounded-pill fw-bold">
                                    Alta Densità
                                </span>
                            </div>
                            <p class="small text-white opacity-50 m-0">Rilevamento della densità di investitori attivi
                                su immobili di fascia alta.</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="glass-ux-card p-4 rounded-5 h-100 d-flex flex-column justify-content-between"
                        style="border-top: 1px solid rgba(255,255,255,0.12); background: rgba(255, 255, 255, 0.02); backdrop-filter: blur(20px);">

                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="small text-white font-monospace" style="letter-spacing: 0.1em;">TOP
                                        PERFORMANCE LOCALITÀ</span>
                                </div>
                                <span style="font-size: 0.75rem;" class="opacity-50 text-white font-monospace">LIVE
                                    DATA</span>
                            </div>

                            <div class="d-flex flex-column gap-3">

                                <div class="p-3 rounded-4 d-flex align-items-center justify-content-between flex-wrap gap-3"
                                    style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.04); transition: all 0.3s;"
                                    onmouseover="this.style.background='rgba(255,255,255,0.04)'"
                                    onmouseout="this.style.background='rgba(255,255,255,0.02)'">

                                    <div class="d-flex align-items-center gap-3" style="min-width: 160px;">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 36px; height: 36px; background: rgba(0, 245, 255, 0.1);">
                                            <i class="ti ti-map-pin"
                                                style="color: var(--neon-cyan); font-size: 1.1rem;"></i>
                                        </div>
                                        <div>
                                            <span class="text-white fw-bold d-block" style="font-size: 0.95rem;">Milano
                                                Hub</span>
                                            <span class="text-white opacity-40" style="font-size: 0.75rem;">Core
                                                Market</span>
                                        </div>
                                    </div>

                                    <div class="text-md-end">
                                        <span class="text-white opacity-40 small d-block font-monospace"
                                            style="font-size: 0.7rem;">PREZZO MEDIO</span>
                                        <span class="text-white fw-semibold font-monospace"
                                            style="font-size: 1.1rem;">€7.450<span
                                                class="small opacity-50">/mq</span></span>
                                    </div>

                                    <div class="text-md-end">
                                        <span class="text-white opacity-40 small d-block font-monospace"
                                            style="font-size: 0.7rem; margin-bottom: 2px;">VARIAZIONE</span>
                                        <span class="badge rounded-pill px-2.5 py-1"
                                            style="background: rgba(0, 245, 160, 0.12); color: var(--neon-emerald); font-size: 0.75rem; font-weight: 700;">
                                            +4.2%
                                        </span>
                                    </div>

                                    <div style="min-width: 120px;">
                                        <div class="d-flex justify-content-between opacity-70 mb-1"
                                            style="font-size: 0.75rem;">
                                            <span class="text-white">Richieste</span>
                                            <span class="text-white font-monospace fw-bold">1,240</span>
                                        </div>
                                        <div class="progress" style="height: 4px; background: rgba(255,255,255,0.08);">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 85%; background: var(--neon-cyan); text-shadow: 0 0 8px var(--neon-cyan);"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-3 rounded-4 d-flex align-items-center justify-content-between flex-wrap gap-3"
                                    style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.04); transition: all 0.3s;"
                                    onmouseover="this.style.background='rgba(255,255,255,0.04)'"
                                    onmouseout="this.style.background='rgba(255,255,255,0.02)'">

                                    <div class="d-flex align-items-center gap-3" style="min-width: 160px;">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 36px; height: 36px; background: rgba(168, 85, 247, 0.1);">
                                            <i class="ti ti-map-pin"
                                                style="color: var(--neon-purple); font-size: 1.1rem;"></i>
                                        </div>
                                        <div>
                                            <span class="text-white fw-bold d-block" style="font-size: 0.95rem;">Roma
                                                Centro</span>
                                            <span class="text-white opacity-40" style="font-size: 0.75rem;">Capital
                                                Premium</span>
                                        </div>
                                    </div>

                                    <div class="text-md-end">
                                        <span class="text-white opacity-40 small d-block font-monospace"
                                            style="font-size: 0.7rem;">PREZZO MEDIO</span>
                                        <span class="text-white fw-semibold font-monospace"
                                            style="font-size: 1.1rem;">€4.800<span
                                                class="small opacity-50">/mq</span></span>
                                    </div>

                                    <div class="text-md-end">
                                        <span class="text-white opacity-40 small d-block font-monospace"
                                            style="font-size: 0.7rem; margin-bottom: 2px;">VARIAZIONE</span>
                                        <span class="badge rounded-pill px-2.5 py-1"
                                            style="background: rgba(0, 245, 160, 0.12); color: var(--neon-emerald); font-size: 0.75rem; font-weight: 700;">
                                            +1.8%
                                        </span>
                                    </div>

                                    <div style="min-width: 120px;">
                                        <div class="d-flex justify-content-between opacity-70 mb-1"
                                            style="font-size: 0.75rem;">
                                            <span class="text-white">Richieste</span>
                                            <span class="text-white font-monospace fw-bold">890</span>
                                        </div>
                                        <div class="progress"
                                            style="height: 4px; background: rgba(255,255,255,0.08);">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 60%; background: var(--neon-purple);" aria-valuenow="60"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-3 rounded-4 d-flex align-items-center justify-content-between flex-wrap gap-3"
                                    style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.04); transition: all 0.3s;"
                                    onmouseover="this.style.background='rgba(255,255,255,0.04)'"
                                    onmouseout="this.style.background='rgba(255,255,255,0.02)'">

                                    <div class="d-flex align-items-center gap-3" style="min-width: 160px;">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 36px; height: 36px; background: rgba(255, 255, 255, 0.05);">
                                            <i class="ti ti-map-pin"
                                                style="color: #fff; opacity: 0.6; font-size: 1.1rem;"></i>
                                        </div>
                                        <div>
                                            <span class="text-white fw-bold d-block"
                                                style="font-size: 0.95rem;">Firenze</span>
                                            <span class="text-white opacity-40" style="font-size: 0.75rem;">Art &
                                                Heritage</span>
                                        </div>
                                    </div>

                                    <div class="text-md-end">
                                        <span class="text-white opacity-40 small d-block font-monospace"
                                            style="font-size: 0.7rem;">PREZZO MEDIO</span>
                                        <span class="text-white fw-semibold font-monospace"
                                            style="font-size: 1.1rem;">€3.950<span
                                                class="small opacity-50">/mq</span></span>
                                    </div>

                                    <div class="text-md-end">
                                        <span class="text-white opacity-40 small d-block font-monospace"
                                            style="font-size: 0.7rem; margin-bottom: 2px;">VARIAZIONE</span>
                                        <span class="badge rounded-pill px-2.5 py-1"
                                            style="background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.6); font-size: 0.75rem; font-weight: 600;">
                                            0.0%
                                        </span>
                                    </div>

                                    <div style="min-width: 120px;">
                                        <div class="d-flex justify-content-between opacity-70 mb-1"
                                            style="font-size: 0.75rem;">
                                            <span class="text-white">Richieste</span>
                                            <span class="text-white font-monospace fw-bold">420</span>
                                        </div>
                                        <div class="progress"
                                            style="height: 4px; background: rgba(255,255,255,0.08);">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 35%; background: rgba(255,255,255,0.4);"
                                                aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="mt-4 pt-3" style="border-top: 1px solid rgba(255,255,255,0.06);">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="small text-white opacity-50 font-monospace"
                                    style="font-size: 0.75rem; letter-spacing: 0.05em;">STORICO INDICE DEI PREZZI
                                    GLOBAL</span>
                                <span class="small fw-semibold"
                                    style="font-size: 0.75rem; color: var(--neon-cyan);">Q1 - Q2 Trend</span>
                            </div>

                            <div style="height: 45px;" class="d-flex align-items-end gap-1.5 pt-2">
                                <div class="w-100"
                                    style="height: 30%; background: linear-gradient(to top, rgba(168, 85, 247, 0.1), var(--neon-purple)); border-radius: 2px 2px 0 0; opacity: 0.5;">
                                </div>
                                <div class="w-100"
                                    style="height: 45%; background: linear-gradient(to top, rgba(168, 85, 247, 0.1), var(--neon-purple)); border-radius: 2px 2px 0 0; opacity: 0.7;">
                                </div>
                                <div class="w-100"
                                    style="height: 40%; background: linear-gradient(to top, rgba(168, 85, 247, 0.1), var(--neon-purple)); border-radius: 2px 2px 0 0; opacity: 0.8;">
                                </div>
                                <div class="w-100"
                                    style="height: 65%; background: linear-gradient(to top, rgba(0, 245, 255, 0.1), var(--neon-cyan)); border-radius: 2px 2px 0 0; opacity: 0.8;">
                                </div>
                                <div class="w-100"
                                    style="height: 55%; background: linear-gradient(to top, rgba(0, 245, 255, 0.1), var(--neon-cyan)); border-radius: 2px 2px 0 0;">
                                </div>
                                <div class="w-100"
                                    style="height: 85%; background: linear-gradient(to top, rgba(0, 245, 160, 0.1), var(--neon-emerald)); border-radius: 2px 2px 0 0;">
                                </div>
                                <div class="w-100"
                                    style="height: 100%; background: linear-gradient(to top, rgba(0, 245, 160, 0.2), var(--neon-emerald)); border-radius: 2px 2px 0 0; box-shadow: 0 0 10px rgba(0, 245, 160, 0.3);">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SEZIONE SERVIZI PREMIUM --}}
    <section class="py-5 position-relative">
        <div class="container">
            <div class="row g-4">

                <!-- Card 1: Realtà Aumentata -->
                <div class="col-md-6 col-lg-4">
                    <div class="glass-ux-card p-4 rounded-5 h-100"
                        style="border-top: 1px solid rgba(255,255,255,0.12);">
                        <div class="px-4 py-3 rounded-4 mb-4 d-inline-block"
                            style="background: rgba(0, 245, 255, 0.05); border: 1px solid rgba(0, 245, 255, 0.1);">
                            <i class="bi bi-headset-vr" style="font-size: 1.7rem; color: var(--neon-cyan);"></i>
                        </div>
                        <h4 class="text-white fw-bold mb-2">Esperienza Immersiva</h4>
                        <p class="text-white opacity-60 small lh-lg">Esplora gli asset tramite render fotorealistici in
                            3D e virtual tour di ultima generazione prima di pianificare la visita.</p>
                    </div>
                </div>

                <!-- Card 2: Off Market / Club Riservato -->
                <div class="col-md-6 col-lg-4">
                    <div class="glass-ux-card p-4 rounded-5 h-100"
                        style="border-top: 1px solid rgba(255,255,255,0.12);">
                        <div class="p-3 rounded-4 mb-4 d-inline-block"
                            style="background: rgba(168, 85, 247, 0.05); border: 1px solid rgba(168, 85, 247, 0.1);">
                            <i class="ti ti-eye-off" style="font-size: 2rem; color: var(--neon-purple);"></i>
                        </div>
                        <h4 class="text-white fw-bold mb-2">Proprietà Off-Market</h4>
                        <p class="text-white opacity-60 small lh-lg">Accedi al nostro catalogo privato di architetture
                            riservate, non presenti sui canali tradizionali per garantire la massima privacy.</p>
                    </div>
                </div>

                <!-- Card 3: Assistenza Predittiva AI -->
                <div class="col-md-12 col-lg-4">
                    <div class="glass-ux-card p-4 rounded-5 h-100"
                        style="border-top: 1px solid rgba(255,255,255,0.12);">
                        <div class="p-3 rounded-4 mb-4 d-inline-block"
                            style="background: rgba(0, 245, 160, 0.05); border: 1px solid rgba(0, 245, 160, 0.1);">
                            <i class="ti ti-cpu" style="font-size: 2rem; color: var(--neon-emerald);"></i>
                        </div>
                        <h4 class="text-white fw-bold mb-2">Analisi Valutativa AI</h4>
                        <p class="text-white opacity-60 small lh-lg">Algoritmi proprietari analizzano lo storico delle
                            transazioni per offrirti proiezioni di rendimento e plusvalenze accurate.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SEZIONE CTA ACQUISIZIONE --}}
    <section class="py-5 position-relative">
        <div class="fluid-blur-2" style="bottom: -10%; left: 10%; opacity: 0.15;"></div>
        <div class="container">
            <div class="glass-ux-card p-5 rounded-5 overflow-hidden position-relative"
                style="border: 1px solid rgba(255,255,255,0.08); background: linear-gradient(135deg, rgba(255,255,255,0.03) 0%, rgba(15,23,42,0.3) 100%);">

                <div class="row align-items-center g-4">
                    <div class="col-lg-7">
                        <span class="font-monospace text-uppercase small d-block mb-2"
                            style="color: var(--neon-cyan); letter-spacing: 0.1em;">Valorizza il tuo Asset</span>
                        <h2 class="text-white fw-black mb-3" style="font-size: 2.2rem; letter-spacing: -0.02em;">Vuoi
                            inserire la tua architettura nel nostro network?</h2>
                        <p class="text-white opacity-70 m-0 pb-3" style="max-width: 500px;">I nostri esperti
                            effettuano screening tecnologici e analisi di mercato avanzate per posizionare il tuo
                            immobile davanti ai giusti investitori globali.</p>
                    </div>
                    <div class="col-lg-5 text-lg-end">
                        <a href="#" class="btn rounded-pill px-5 py-3 fw-bold text-white search-glow-wrap"
                            style="background: linear-gradient(90deg, var(--neon-purple), var(--neon-cyan)); border: none; font-size: 0.95rem; transition: transform 0.2s;"
                            onmouseover="this.style.transform='scale(1.03)'"
                            onmouseout="this.style.transform='scale(1)'">
                            Proponi il tuo Spazio <i class="ti ti-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout>
