<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use App\Models\DoctorSchedule;

class SchedulesCreateForm extends Component
{
    public $daysOfweek = [
            '0' => 'Sunday',
            '1' => 'Monday',
            '2' => 'Tuesday',
            '3' => 'Wednesday',
            '4' => 'Thursday',
            '5' => 'Friday',
            '6' => 'Saturday',
        ];

    public $available_day = '';
    public $from = '';
    public $to = '';

    public function save(){
        $this->validate([
            'available_day' => 'required',
            'from' => 'required',
            'to' => 'required',
        ]);
        $user_id = auth()->user()->id;
        $doctor_details = Doctor::where('user_id',$user_id)->first();

        $newSchedule = new DoctorSchedule;
        $newSchedule->doctor_id = $doctor_details->id;
        $newSchedule->available_day = $this->available_day;
        $newSchedule->from = $this->from;
        $newSchedule->to = $this->to;
        $newSchedule->save();

        session()->flash('message','schedule created successfully');
        return $this->redirect('/doctor/schedules', navigate: true);

    }
    public function render()
    {
        return view('livewire.schedules-create-form');
    }
}
