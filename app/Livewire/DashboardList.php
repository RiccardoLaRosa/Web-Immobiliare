<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Property;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;

class DashboardList extends Component
{
    public $authProperties=[];

    public function mount() {
        $this->authProperties = Auth::user()->properties;
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
    public function render()
    {
        $this->authProperties = Auth::user()->properties;
        return view('livewire.dashboard-list');
    }
}
