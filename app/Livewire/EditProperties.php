<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Property;
use Livewire\WithFileUploads;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;

class EditProperties extends Component
{
    use WithFileUploads;

    #[Validate(rule:'required', message:'Inserisci un titolo')]
    public $title;
    #[Validate(rule:'required', message:'Inserisci una descrizione')]
    public $description;
    #[Validate(rule:'numeric', message:'Inserisci un numero')]
    public $sqm;
    #[Validate(rule:'numeric', message:'Inserisci un numero')]
    public $rooms;
    #[Validate(rule:'required', message:'Inserisci un indirizzo')]
    public $address;
    #[Validate(rule:'required', message:'Inserisci una città')]
    public $city;
    #[Validate(rule:'required', message:'Inserisci disponibilità')]
    public $status;

    public $newImages = [];
    public $existingImages = [];
    public $imagesToDelete = [];

    public $editmode = false;
    public $property = null;

    #[On('edit-mode')]
    public function prepareEdit(Property $property)
    {
        $this->editmode = true;
        $this->property = $property;
        $this->title = $property->title;
        $this->description = $property->description;
        $this->sqm = $property->sqm;
        $this->rooms = $property->rooms;
        $this->address = $property->address;
        $this->city = $property->city;
        $this->status = $property->status;
        $this->existingImages = $property->images->toArray();
        $this->imagesToDelete = [];
        $this->newImages = [];
    }

    public function markForDeletion($imageId)
    {
        $this->imagesToDelete[] = $imageId;
    }

    public function undoDelete($imageId)
    {
        $this->imagesToDelete = array_filter(
            $this->imagesToDelete,
            fn($id) => $id !== $imageId
        );
    }

    public function editProperties()
    {
        $this->validate();

        $this->property->update([
            'title'       => $this->title,
            'description' => $this->description,
            'sqm'         => $this->sqm,
            'rooms'       => $this->rooms,
            'address'     => $this->address,
            'city'        => $this->city,
            'status'      => $this->status,
        ]);

        // Elimina le immagini marcate
        foreach ($this->imagesToDelete as $imageId) {
            $image = $this->property->images()->find($imageId);
            if ($image) {
                \Storage::disk('public')->delete($image->path);
                $image->delete();
            }
        }

        // Carica le nuove immagini
        foreach ($this->newImages as $image) {
            $this->property->images()->create([
                'path' => $image->store('uploads', 'public'),
            ]);
        }

        session()->flash('success', 'Proprietà aggiornata correttamente!');
        $this->dispatch('propierties-upload');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.edit-properties');
    }
}