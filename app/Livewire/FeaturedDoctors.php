<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;

class FeaturedDoctors extends Component
{
    public $featuredDoctors;

    public function mount($speciality_id){
        if ($speciality_id != 0) {
            $this->featuredDoctors = Doctor::with(['speciality', 'doctorUser'])
                ->whereHas('speciality', function ($query) use ($speciality_id) {
                    $query->where('specialities.id', $speciality_id);
                })
                ->where('is_featured',1)
                ->get();
        } else {
            $this->featuredDoctors = Doctor::with(['speciality', 'doctorUser'])->where('is_featured',1)->get();
        }
        
    }
    public function render()
    {
        return view('livewire.featured-doctors');
    }
}
