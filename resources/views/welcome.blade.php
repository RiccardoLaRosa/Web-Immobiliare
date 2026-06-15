<x-layout>

{{-- HERO --}}
<section style="background: linear-gradient(135deg, #0a2342 0%, #185FA5 50%, #1a8a6e 100%); padding: 130px 0; color: #fff;" class="rounded-3 mt-3">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-7">
                <span class="badge rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2); font-size: 12px; color: rgba(255,255,255,0.85); padding: 6px 14px;">
                    🏡 Mercato immobiliare
                </span>
                <h1 class="fw-bold lh-sm" style="font-size: 2.4rem;">Compra o vendi il tuo immobile</h1>
                <p class="mt-3" style="opacity: 0.85; font-size: 1.05rem;">
                    Trova la tua prossima casa in vendita o in affitto. Inserisci una città o una parola chiave.
                </p>

                <x-filter-home :properties="$properties"></x-filter-home>

                <small class="d-block mt-2" style="opacity: 0.6;">Prova: "Bilocale", "Milano", "Disponibile"</small>
            </div>
            <div class="col-md-5 text-center d-none d-md-flex justify-content-center align-items-center">
                <div class="d-flex align-items-center justify-content-center rounded-circle" style="width: 220px; height: 220px; background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.12);">
                    <i class="ti ti-building-estate" style="font-size: 90px; color: rgba(255,255,255,0.7);"></i>
                </div>
            </div>
        </div>
    </div>
</section>



{{-- STATISTICHE --}}
<section style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-md-3">
                <div class="bg-white rounded-4 p-4" style="border: 1px solid #e8eef5;">
                    <i class="ti ti-building" style="font-size: 32px; color: #185FA5;"></i>
                    <h3 class="fw-bold mt-2 mb-1" style="color: #0a2342;">120</h3>
                    <p class="text-muted small mb-0">Immobili</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="bg-white rounded-4 p-4" style="border: 1px solid #e8eef5;">
                    <i class="ti ti-users" style="font-size: 32px; color: #185FA5;"></i>
                    <h3 class="fw-bold mt-2 mb-1" style="color: #0a2342;">85</h3>
                    <p class="text-muted small mb-0">Utenti registrati</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="bg-white rounded-4 p-4" style="border: 1px solid #e8eef5;">
                    <i class="ti ti-rosette" style="font-size: 32px; color: #185FA5;"></i>
                    <h3 class="fw-bold mt-2 mb-1" style="color: #0a2342;">50</h3>
                    <p class="text-muted small mb-0">Vendite completate</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="bg-white rounded-4 p-4" style="border: 1px solid #e8eef5;">
                    <i class="ti ti-calendar-plus" style="font-size: 32px; color: #185FA5;"></i>
                    <h3 class="fw-bold mt-2 mb-1" style="color: #0a2342;">30</h3>
                    <p class="text-muted small mb-0">Nuovi annunci</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- IMMOBILI RECENTI --}}
<section style="padding: 60px 0; background: #fff;">
    <div class="container">
        <h2 class="fw-bold mb-1" style="color: #0a2342;">Immobili recenti</h2>
        <p class="text-muted mb-4">Le ultime proprietà aggiunte alla piattaforma</p>

        <div class="row g-4">
            @foreach ($properties->take(6) as $property)
            <div class="col-md-4">
                <div class="rounded-4 overflow-hidden h-100 d-flex flex-column" style="border: 1px solid #e8eef5; transition: transform 0.2s, box-shadow 0.2s;">

                    @if ($property->images->isNotEmpty())
                        <img src="{{ Storage::url($property->images->first()->path) }}"
                            style="height: 220px; object-fit: cover; width: 100%;"
                            alt="{{ $property->title }}">
                    @else
                        <div class="d-flex align-items-center justify-content-center" style="height: 190px; background: linear-gradient(135deg, #185FA5, #1a8a6e);">
                            <i class="ti ti-building" style="font-size: 48px; color: rgba(255,255,255,0.5);"></i>
                        </div>
                    @endif

                    <div class="p-4 d-flex flex-column flex-grow-1">
                        <h5 class="fw-semibold mb-1" style="color: #0a2342;">{{ $property->title }}</h5>
                        <p class="text-muted small mb-3">{{ Str::limit($property->description, 80) }}</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            @if ($property->status == 'Disponibile')
                                <span class="rounded-2 px-2 py-1" style="background: #e8f8f2; color: #0f6e56; font-size: 12px;">Disponibile</span>
                            @else
                                <span class="rounded-2 px-2 py-1" style="background: #f5f5f5; color: #6c757d; font-size: 12px;">Non disponibile</span>
                            @endif
                            <a href="{{ route('properties.show', $property) }}" class="btn btn-sm px-3" style="background: #185FA5; color: #fff; border-radius: 8px; font-size: 13px;">
                                Dettagli
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

</x-layout>