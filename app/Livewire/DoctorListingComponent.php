<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class DoctorListingComponent extends Component
{
    public function render()
    {
        return view('livewire.doctor-listing-component',[
            'doctors' => Doctor::all()
        ]);
    }
}
