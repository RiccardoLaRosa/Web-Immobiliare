<div class="container mt-2" style="margin-top: 150px !important;">

    {{-- BARRA FILTRI ORIZZONTALE (In alto) --}}
    <div class="card shadow-sm rounded-4 border-0 p-4 mb-5" style="background-color: #f8f9fa;">
        <h5 class="fw-bold"><i class="bi bi-sliders me-2"></i>Filtra Ricerca</h5>
        <x-filter-home :properties="$properties"></x-filter-home>
    </div>

    {{-- GRIGLIA PROPRIETÀ (In basso) --}}
    <div class="row g-4">
        @foreach ($properties as $property)
            <div class="col-12 col-md-6 col-lg-6">
                <a href="{{ route('properties.show', $property) }}" class="text-decoration-none">
                <div class="card h-100 shadow-lg rounded-4 border-0 hover-shadow d-flex flex-row"
                    style="background-color: rgb(228, 228, 228)">

                    {{-- Mini immagine a sinistra --}}
                    <div class="property-image flex-shrink-0">
                        @if ($property->images->isNotEmpty())
                            <img src="{{ Storage::url($property->images->first()->path) }}"
                                class="img-fluid rounded-start" style="width:250px; height:220px; object-fit:cover;">
                        @else
                            <div class="bg-secondary rounded-start d-flex justify-content-center align-items-center"
                                style="width:250px; height:220px; color:white;"> No Image </div>
                        @endif
                    </div>

                    {{-- Info principali --}}
                    <div class="card-body d-flex flex-column justify-content-between ms-2">
                        <div>
                            <h5 class="card-title fw-bold">{{ $property->title }}</h5>
                            <p class="card-text">{{ Str::limit($property->description, 40) }}</p>
                            <ul class="list-unstyled mb-0 small text-muted">
                                <li><strong>Quadratura:</strong> {{ $property->sqm }} mq</li>
                                <li><strong>Stanze:</strong> {{ $property->rooms }}</li>
                                <li><strong>Città:</strong> {{ $property->city }}</li>
                                <li><strong>Stato:</strong>
                                    @if ($property->status == 'Disponibile')
                                        <span class="badge bg-success">{{ $property->status }}</span>
                                    @else
                                        <span class="badge bg-danger">{{ $property->status }}</span>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                </a>
            </div>
        @endforeach
    </div>

</div>
