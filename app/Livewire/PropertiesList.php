<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Property;
use Livewire\Attributes\On;

class PropertiesList extends Component
{
    public $properties=[];
 
    public function mount() {
        $this->properties = Property::all();
    }
    
    public function editMode(Property $property) {
        $this->dispatch('edit-mode', property:$property);
    }

    public function deleteProperties(Property $property) {
        $property->delete();
        session()->flash('success','Articolo eliminato correttamente!');
    }

    #[On('create-properties')]
    #[On('propierties-upload')]
    public function render() {
        $this->properties = Property::all();
        return view('livewire.properties-list');
    }
}