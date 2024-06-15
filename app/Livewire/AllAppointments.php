<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use App\Models\Appointment;
use Livewire\WithPagination;

class AllAppointments extends Component
{
    use WithPagination;
    public $perPage = 5;
    public $search = '';

    public function render()
    {
        $user = auth()->user(); 

        if(auth()->user() && auth()->user()->role == 1){
            
            $doctor = Doctor::where('user_id',$user->id)->first();
        
            return view('livewire.all-appointments',[
                'all_appointments' => Appointment::search($this->search)
                ->with('patient','doctor')
                ->where('doctor_id',$doctor->id)
                ->paginate($this->perPage)
            ]);
        }
        if(auth()->user() && auth()->user()->role == 0){
        
            return view('livewire.all-appointments',[
                'all_appointments' => Appointment::search($this->search)
                ->with('patient','doctor')
                ->where('patient_id',$user->id)
                ->paginate($this->perPage)
            ]);
        }
        return view('livewire.all-appointments',[
            'all_appointments' => Appointment::search($this->search)
            ->with('patient','doctor')
          ->paginate($this->perPage)
        ]);
    }
}
