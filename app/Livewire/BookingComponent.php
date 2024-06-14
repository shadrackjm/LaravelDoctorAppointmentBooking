<?php

namespace App\Livewire;

use App\Models\Appointment;
use App\Models\DoctorSchedule;
use Livewire\Component;
use Illuminate\Support\Carbon;

class BookingComponent extends Component
{
    public $doctor_details;
    public $selectedDate;
    public $availableDates = [];
    public $timeSlots = [];

    public function mount($doctor)
    {   
        $this->doctor_details = $doctor;
        $this->fetchAvailableDates($this->doctor_details);
    }

    public function fetchAvailableDates($doctor)
    {
        $schedules = DoctorSchedule::where('doctor_id', $doctor->id)
            ->get();

        $availability = [];
        foreach ($schedules as $schedule) {
            $dayOfWeek = $schedule->available_day; //0 - sunday
            $fromTime = Carbon::createFromFormat('H:i:s', $schedule->from);
            $toTime = Carbon::createFromFormat('H:i:s', $schedule->to);
            $availability[$dayOfWeek] = [
                'from' => $fromTime,
                'to' => $toTime,
            ];
        }

        $dates = [];
        $today = Carbon::today();
        for ($i = 0; $i < 365; $i++) { //1 year
            $date = $today->copy()->addDays($i);
            $dayOfWeek = $date->dayOfWeek;

            if (isset($availability[$dayOfWeek])) {
                $dates[] = $date->format('Y-m-d');
            }
        }

        $this->availableDates = $dates;
    }

    public function selectDate($date)
    {
        $this->selectedDate = $date;
        $this->fetchTimeSlots($date, $this->doctor_details);
    }

    public function fetchTimeSlots($date, $doctor)
    {
        $dayOfWeek = Carbon::parse($date)->dayOfWeek; //0 , 1... 5
        $carbonDate = Carbon::parse($date)->format('Y-m-d');
        $schedule = DoctorSchedule::where('doctor_id', $doctor->id)
            ->where('available_day', $dayOfWeek)
            ->first();

        if ($schedule) {
            $fromTime = Carbon::createFromFormat('H:i:s', $schedule->from);
            $toTime = Carbon::createFromFormat('H:i:s', $schedule->to);

            $slots = [];
            while ($fromTime->lessThan($toTime)) {

                $timeSlot = $fromTime->format('H:i:s');
                $appointmentExists = Appointment::where('doctor_id',  $doctor->id)
                    ->where('appointment_date', $carbonDate)
                    ->where('appointment_time', $timeSlot)
                    ->exists();
                if (!$appointmentExists) {
                    $slots[] = $timeSlot;
                }

                $fromTime->addHour();
            }
            
            $this->timeSlots = $slots;
                    // dd($this->timeSlots);

        } else {
            $this->timeSlots = [];
        }
    }

    public function render()
    {
        return view('livewire.booking-component', [
            'availableDates' => $this->availableDates,
        ]);
    }
}
