<div class="d-flex flex-column justify-content-center align-items-center mt-1 @if (!$editmode) d-none @endif">

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

        <button type="submit" class="btn btn-primary">Modifica</button>
        <a href="{{ route('properties.index') }}" class="btn btn-danger">Esci</a>

    </form>
</div>
