<div class="container mt-5">

    {{-- Griglia proprietà --}}
    <div class="row g-4">
        @foreach ($properties as $property)
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card h-100 shadow-lg rounded-4 border-0 hover-shadow d-flex flex-row">
                    
                    {{-- Mini immagine a sinistra --}}
                    <div class="property-image flex-shrink-0">
                        @if($property->image)
                            <img src="{{ asset('storage/' . $property->image) }}" 
                                 class="img-fluid rounded-start" 
                                 style="width:200px; height:200px; object-fit:cover;">
                        @else
                            <div class="bg-secondary rounded-start d-flex justify-content-center align-items-center" style="width:200px; height:200px; color:white;"> No Image </div>
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