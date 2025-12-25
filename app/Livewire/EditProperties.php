<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Property;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;

class EditProperties extends Component
{
    #[Validate(rule:'required', message:'Inserisci un titolo')]
    public $title;
    #[Validate(rule:'required', message:'Inserisci una descrizione')]
    public $description;
    #[Validate(rule:'numeric', message:'Inserisci un numero')]
    public $sqm;
    #[Validate(rule:'numeric', message:'Inserisci un numero')]
    public $rooms;
    #[Validate(rule:'required', message:'Inserisci una indirizzo')]
    public $address;
    #[Validate(rule:'required', message:'Seleziona una città')]
    public $city;
    #[Validate(rule:'required', message:'Inserisci disponibilità')]
    public $status;
    public $editmode=false;
    public $property=null;

     #[On('edit-mode')]
    public function prepareEdit(Property $property) {
        $this->editmode=true;
        $this->property=$property;
        $this->title = $property->title;
        $this->description = $property->description;
        $this->sqm = $property->sqm;
        $this->rooms = $property->rooms;
        $this->address = $property->address;
        $this->city = $property->city;
        $this->status = $property->status;
    }

    public function editProperties() {
        $property=$this->property;
        $property->update([
            'title'=>$this->title,
            'description'=>$this->description,
            'sqm'=>$this->sqm,
            'rooms'=>$this->rooms,
            'address'=>$this->address,
            'city'=>$this->city,
            'status'=>$this->status,
        ]);
        $property->save();
        $this->dispatch('propierties-upload');
        $this->reset();
    }
    
    public function render()
    {
        return view('livewire.edit-properties');
    }
}
