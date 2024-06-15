<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointment;

class RecentAppointments extends Component
{
    public $recent_appointments;

    public function mount(){
        $this->recent_appointments = Appointment::with('patient','doctor')->orderBy('created_at','DESC')
        ->limit(10)->get();
    }
    public function render()
    {
        return view('livewire.recent-appointments');
    }
}
