<x-layout>
   <div class="container mt-5" style= "margin-top: 150px !important;">

    <div class="card shadow-sm rounded-4 border-0 p-4 mb-5 d-flex flex-column align-items-start justify-content-center" style="background-color: #f8f9fa;">
        @if (request('cityInput'))
            <h4 class="fw-bold"><i class="bi bi-sliders me-2"></i> Filtro Ricerca Attivo:   <strong>{{ request('cityInput') }}</strong> </h4>
        @elseif (request('inputTitle'))
            <h4 class="fw-bold"><i class="bi bi-sliders me-2"></i> Filtro Ricerca Attivo:   <strong>{{ request('inputTitle') }}</strong> </h4>
        @elseif (request('roomsInput'))
            <h4 class="fw-bold"><i class="bi bi-sliders me-2"></i> Filtro Ricerca Attivo:   <strong>{{ request('roomsInput') }}</strong> </h4>
        @endif            
    </div>

    {{-- Griglia proprietà --}}
    <div class="row g-4">
        @foreach ($properties as $property)
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card h-100 shadow-lg rounded-4 border-0 hover-shadow d-flex flex-row" style="background-color: rgb(228, 228, 228)">
                    
                    {{-- Mini immagine a sinistra --}}
                    <div class="property-image flex-shrink-0">
                       @if ($property->images->isNotEmpty())
                            <img src="{{ Storage::url($property->images->first()->path) }}" 
                                 class="img-fluid rounded-start" 
                                 style="width:250px; height:220px; object-fit:cover;">
                        @else
                            <div class="bg-secondary rounded-start d-flex justify-content-center align-items-center" style="width:200px; height:200px; color:white;"> No Image </div>
                        @endif
                    </div>

                    {{-- Info principali --}}
                    <div class="card-body d-flex flex-column justify-content-between ms-2 " >
                        <div>
                            <h5 class="card-title fw-bold">{{ $property->title }}</h5>
                            <p class="card-text">{{ Str::limit($property->description, 40) }}</p>
                            <ul class="list-unstyled mb-0 small text-muted">
                                <li><strong>Quadratura:</strong> {{ $property->sqm }} mq</li>
                                <li><strong>Stanze:</strong> {{ $property->rooms }}</li>
                                <li><strong>Città:</strong> {{ $property->city }}</li>
                                <li><strong>Stato:</strong>
                                    @if($property->status == 'Disponibile')
                                        <span class="badge bg-success">{{$property->status}}</span>
                                    @else
                                        <span class="badge bg-danger">{{$property->status}}</span>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

</div>
</x-layout>