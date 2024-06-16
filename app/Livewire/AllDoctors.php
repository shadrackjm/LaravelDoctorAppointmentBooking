<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class AllDoctors extends Component
{
    public function render()
    {
        return view('livewire.all-doctors',[
            'all_doctors' => Doctor::with(['speciality', 'doctorUser'])->get()
        ]);
    }
}
