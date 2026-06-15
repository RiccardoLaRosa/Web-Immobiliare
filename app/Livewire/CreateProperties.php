<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProperties extends Component
{
    use WithFileUploads;

    #[Validate('required', message: 'Inserisci un titolo')]
    public $title;

    #[Validate('numeric', message: 'Inserisci un numero')]
    public $sqm;

    #[Validate('required', message: 'Inserisci una città')]
    public $city;

    #[Validate('required', message: 'Inserisci un numero')]
    public $rooms;

    #[Validate('required', message: 'Inserisci disponibilità')]
    public $status;

    #[Validate(['images.*' => 'image|max:2048'])]
    #[Validate('required', message: 'Carica almeno un\'immagine')]
    public $images = [];

    public $description;
    public $address;
    public $editmode = false;
    public $property = null;

    public function createProperties()
    {
        $this->validate();

        $property = Property::create([
            'title'       => $this->title,
            'sqm'         => $this->sqm,
            'city'        => $this->city,
            'rooms'       => $this->rooms,
            'description' => $this->description,
            'address'     => $this->address,
            'status'      => $this->status,
            'user_id'     => auth()->id(),
        ]);

        foreach ($this->images as $image) {
            $property->images()->create([
                'path' => $image->store('uploads', 'public')
            ]);
        }

        session()->flash('success', 'Proprietà inserita correttamente!');
        $this->dispatch('create-properties');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-properties');
    }
}