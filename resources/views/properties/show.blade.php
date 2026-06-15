<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="card border-0 shadow rounded-4 overflow-hidden">

                    {{-- Immagine --}}
                    <div class="position-relative">
                        @if ($property->images->isNotEmpty())
                            <img
                                src="{{ Storage::url($property->images->first()->path) }}"
                                class="img-fluid w-100"
                                style="height: 380px; object-fit: cover;"
                            >
                        @else
                            <div class="bg-secondary d-flex justify-content-center align-items-center text-white"
                                 style="height: 380px;">
                                No Image
                            </div>
                        @endif

                        {{-- Stato --}}
                        @if ($property->status == 'Disponibile')
                            <span class="position-absolute top-0 end-0 m-3 badge bg-success px-3 py-2">
                                {{ $property->status }}
                            </span>
                        @else
                            <span class="position-absolute top-0 end-0 m-3 badge bg-danger px-3 py-2">
                                {{ $property->status }}
                            </span>
                        @endif
                    </div>

                    {{-- Contenuto --}}
                    <div class="card-body p-4 p-md-5">
                        <h2 class="fw-bold mb-2">{{ $property->title }}</h2>

                        <p class="text-muted mb-4">
                            {{ Str::limit($property->description, 120) }}
                        </p>

                        <hr>

                        <div class="d-flex justify-content-between">
                            <div class="col-5 ms-4">
                                <p class="mb-1 text-muted">Quadratura</p>
                                <h5 class="fw-bold">{{ $property->sqm }} mq</h5>
                            </div>

                            <div class="col-5">
                                <p class="mb-1 text-muted">Stanze</p>
                                <h5 class="fw-bold">{{ $property->rooms }}</h5>
                            </div>

                            <div class="col-5">
                                <p class="mb-1 text-muted">Città</p>
                                <h5 class="fw-bold">{{ $property->city }}</h5>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-layout>
