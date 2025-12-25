<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateProperties extends Component
{
    #[Validate(rule:'required', message:'Inserisci un titolo')]
    public $title;
    #[Validate(rule:'numeric', message:'Inserisci un numero')]
    public $sqm;
    #[Validate(rule:'required', message:'Inserisci una città')]
    public $city;
    public $editmode=false;
    public $property=null;
    #[Validate(rule:'required', message:'Inserisci un numero')]
    public $rooms;
    public $description;
    public $address;
    #[Validate(rule:'required', message:'Inserisci disponibilità')]
    public $status;
    public $user_id;

    public function createProperties() {
        $this->validate();
        $this->user_id = auth()->user()->id;
        Property::create($this->all());
        session()->flash('success','Articolo inserito correttamente!');
        $this->dispatch('create-properties');
        $this->reset();
    }
   
    public function render()
    {
        return view('livewire.create-properties');
    }
}
