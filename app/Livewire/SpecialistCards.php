<?php

namespace App\Livewire;

use App\Models\Specialities;
use Livewire\Component;

class SpecialistCards extends Component
{
    public $specialist_cards;

    public function mount(){
        $this->specialist_cards = Specialities::all();
    }
    public function render()
    {
        return view('livewire.specialist-cards');
    }
}
