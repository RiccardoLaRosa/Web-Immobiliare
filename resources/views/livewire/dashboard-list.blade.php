<div class="listings-card mt-4">
    <div class="listings-title">I tuoi annunci recenti</div>

    @forelse($authProperties as $property)
        <div class="listing-row">
            <div class="listing-icon apt">
                <i class="bi bi-building"></i>
            </div>
            <div class="flex-grow-1">
                <div class="listing-name">{{ $property->title }}</div>
                <div class="listing-meta">
                    {{ $property->city }} · {{ $property->sqm }} mq · {{ $property->rooms }} stanze
                </div>
                <div class="listing-meta">{{ $property->address }}</div>
            </div>
            <div class="d-flex align-items-center gap-2">
                @if($property->status === 'Disponibile')
                    <span class="badge-avail">Disponibile</span>
                @else
                    <span class="badge-unavail">{{ $property->status }}</span>
                @endif
                <button class="btn btn-sm btn-outline-primary" wire:click="editMode({{ $property }})">
                    <i class="bi bi-pencil"></i>
                </button>
                <button class="btn btn-sm btn-outline-danger"
                    wire:click="deleteProperties({{ $property->id }})"
                    wire:confirm="Sei sicuro di voler eliminare questo annuncio?">
                    <i class="bi bi-trash"></i>
                </button>
            </div>
        </div>
    @empty
        <p class="text-secondary text-center py-3">Nessun annuncio ancora pubblicato.</p>
    @endforelse
</div>