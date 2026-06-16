<div
    class="d-flex flex-column justify-content-center align-items-center mt-1 @if (!$editmode) d-none @endif">

    <form wire:submit='editProperties' class="w-75">

        <h3 class="border-bottom p-1">Modifica il tuo Immobile</h3>

        <div class="mb-3">
            <label for="name" class="form-label">Titolo Proprietà</label>
            <input type="text" class="form-control" id="name" wire:model.live="title">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" wire:model.live="description">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sqmm" class="form-label">Quadratura Immobile</label>
            <input type="text" class="form-control" id="sqmm" wire:model.live="sqm">
            @error('sqm')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="rooms" class="form-label">Numero stanze</label>
            <input type="number" class="form-control" id="rooms" wire:model.live="rooms">
            @error('rooms')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Indirizzo</label>
            <input type="text" class="form-control" id="address" wire:model.live="address">
            @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="città" class="form-label">Città</label>
            <input type="text" class="form-control" id="città" wire:model.live="city">
            @error('city')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Disponibilità</label>
            <select class="form-select" aria-label="Default select example" wire:model.live="status" id="status">
                <option selected>Seleziona</option>
                <option value="Disponibile">Disponibile</option>
                <option value="Non Disponibile">Non disponibile</option>
            </select>
            @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Immagini esistenti --}}
        @if ($existingImages)
            <div class="mb-3">
                <label class="form-label fw-semibold">Immagini attuali</label>
                <div class="d-flex flex-wrap gap-2">
                    @foreach ($existingImages as $img)
                        <div class="position-relative">
                            <img src="{{ Storage::url($img['path']) }}" class="rounded"
                                style="width:80px; height:80px; object-fit:cover;
                                opacity: {{ in_array($img['id'], $imagesToDelete) ? '0.3' : '1' }};">
                            @if (in_array($img['id'], $imagesToDelete))
                                <button type="button" class="btn btn-sm btn-success position-absolute top-0 end-0"
                                    wire:click="undoDelete({{ $img['id'] }})">
                                    <i class="bi bi-arrow-counterclockwise"></i>
                                </button>
                            @else
                                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0"
                                    wire:click="markForDeletion({{ $img['id'] }})">
                                    <i class="bi bi-x"></i>
                                </button>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- Nuove immagini --}}
        <div class="mb-3">
            <label class="form-label fw-semibold">Aggiungi nuove immagini</label>
            <input type="file" class="form-control" wire:model="newImages" multiple accept="image/*">
            @error('newImages.*')
                <span class="text-danger small">{{ $message }}</span>
            @enderror

            @if ($newImages)
                <div class="d-flex flex-wrap gap-2 mt-2">
                    @foreach ($newImages as $img)
                        <img src="{{ $img->temporaryUrl() }}" class="rounded"
                            style="width:80px; height:80px; object-fit:cover;">
                    @endforeach
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
        <a href="{{ route('properties.index') }}" class="btn btn-danger">Esci</a>

    </form>
</div>
