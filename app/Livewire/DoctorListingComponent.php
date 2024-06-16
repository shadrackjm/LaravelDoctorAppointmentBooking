<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class DoctorListingComponent extends Component
{

    public $doctors;



    public function mount(){
        $this->doctors = Doctor::with('speciality','doctorUser')->get();
    }

    public function featured($id){
        $doctor = Doctor::find($id);
       
        if ($doctor->is_featured == 1) {
                  dd($doctor);
            $doctor->update([
            'is_featured' => 0
        ]);
        }else{
       
            $doctor->update([
            'is_featured' => 1
            ]);
        }
    }
    public function render()
    {
        return view('livewire.doctor-listing-component');
    }
}
