<div class="d-flex flex-column justify-content-center align-items-center" style="margin-top: 120px !important;">

    <h3 class="border-bottom p-1">Inserisci il tuo Immobile</h3>

    @if(session('success'))
        <div class="alert alert-success col-6">{{ session('success') }}</div>
    @endif

    <form wire:submit="createProperties" class="col-6">

        <div class="mb-3">
            <label for="title" class="form-label mt-5">Titolo Proprietà</label>
            <input type="text" class="form-control" id="title" wire:model="title">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea rows="6" class="form-control" id="description" wire:model="description"></textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sqm" class="form-label">Quadratura Immobile</label>
            <input type="text" class="form-control" id="sqm" wire:model="sqm">
            @error('sqm')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="rooms" class="form-label">Numero stanze</label>
            <input type="number" class="form-control" id="rooms" wire:model="rooms">
            @error('rooms')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Indirizzo</label>
            <input type="text" class="form-control" id="address" wire:model="address">
            @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">Città</label>
            <input type="text" class="form-control" id="city" wire:model="city">
            @error('city')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Immagini</label>
            <input type="file" class="form-control" wire:model="images" multiple>
            <div wire:loading wire:target="images" class="text-muted mt-1">
                Caricamento immagini in corso...
            </div>
            @error('images')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('images.*')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Disponibilità</label>
            <select class="form-select" wire:model="status" id="status">
                <option value="">Seleziona</option>
                <option value="Disponibile">Disponibile</option>
                <option value="Non Disponibile">Non disponibile</option>
            </select>
            @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mb-5 mt-4" wire:loading.attr="disabled">
            <span wire:loading.remove wire:target="createProperties">Inserisci</span>
            <span wire:loading wire:target="createProperties">Salvataggio...</span>
        </button>

    </form>
</div>