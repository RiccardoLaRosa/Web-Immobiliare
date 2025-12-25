<div class="container mt-5">

    {{-- Griglia cards --}}
    <div class="row g-4">
        @foreach ($authProperties as $property)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm h-100 border-0 rounded-4">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title">{{ $property->title }}</h5>
                            <p class="card-text text-truncate">{{ Str::limit($property->description, 80) }}</p>
                            <ul class="list-unstyled mb-2">
                                <li><strong>Quadratura:</strong> {{ $property->sqm }} mq</li>
                                <li><strong>Stanze:</strong> {{ $property->rooms }}</li>
                                <li><strong>Indirizzo:</strong> {{ $property->address }}</li>
                                <li><strong>Città:</strong> {{ $property->city }}</li>
                                <li><strong>Stato:</strong>
                                    @if ($property->status === 'Disponibile')
                                        <span class="badge bg-success">{{ $property->status }}</span>
                                    @else
                                        <span class="badge bg-secondary">{{ $property->status }}</span>
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <button class="btn btn-warning btn-sm flex-fill me-1"
                                wire:click='editMode({{ $property }})'>Modifica</button>
                            <button class="btn btn-danger btn-sm flex-fill ms-1"
                                wire:click='deleteProperties({{ $property->id }})'>Elimina</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
