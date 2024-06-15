<?php

namespace App\Livewire;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Specialities;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class StatisticComponent extends Component
{
    public $users_count = 0;
    public $specialities_count = 0;
    public $doctors_count = 0;
    public $patients_count = 0;
    public $appointments_count = 0;
    public $doctor_appointments_count = 0;
    public $upcoming_appointments_count = 0;
    public $complete_appointments_count = 0;
    public $last_week_appointments_count = 0;
    public $last_month_appointments_count = 0;
    public $last_week_users_count = 0;
    public $last_month_users_count = 0;

     public $last_week_doctor_count = 0;
    public $last_month_doctor_count = 0;

    public $last_week_patient_count = 0;
    public $last_month_patient_count = 0;


    public function mount(){

        $this->users_count = User::count();
        $this->doctors_count = Doctor::count();
        $this->patients_count = User::where('role',0)->count();
        $this->appointments_count = Appointment::count();
        $this->specialities_count = Specialities::count();

        if(auth()->user()->role == 1){
            $user_doctor = auth()->user(); 
            $doctor = Doctor::where('user_id',$user_doctor->id)->first();
            $this->doctor_appointments_count = Appointment::where('doctor_id',$doctor->id)->count();

            //upcoming
            $doctors_appointments = Appointment::where('doctor_id',$doctor->id)->get();
            // dd($doctors_appointments);
            foreach ($doctors_appointments as $value) {
                if(Carbon::parse($value->appointment_date)->isAfter(Carbon::today())){
                    $this->upcoming_appointments_count++;
                }

                if(Carbon::parse($value->appointment_date)->isBefore(Carbon::today())){
                    $this->complete_appointments_count++;
                }

                if(Carbon::parse($value->appointment_date)->isBetween(Carbon::today()->subWeek(),Carbon::today())){
                    $this->last_week_appointments_count++;
                }

                if(Carbon::parse($value->appointment_date)->isBetween(Carbon::today()->subMonth(),Carbon::today())){
                    $this->last_month_appointments_count++;
                }
            }
             
            
        }
        
            //  all users
            $all_users = User::all();
            foreach ($all_users as $value) {
                if(Carbon::parse($value->created_at)->isBetween(Carbon::today()->subWeek(),Carbon::today())){
                    $this->last_week_users_count++;
                }

                if(Carbon::parse($value->created_at)->isBetween(Carbon::today()->subMonth(),Carbon::today())){
                    $this->last_month_users_count++;
                }
            }

            //  all appointments
            $all_appointment = Appointment::all();
            foreach ($all_appointment as $value) {
                if(Carbon::parse($value->created_at)->isBetween(Carbon::today()->subWeek(),Carbon::today())){
                    $this->last_week_appointments_count++;
                }

                if(Carbon::parse($value->created_at)->isBetween(Carbon::today()->subMonth(),Carbon::today())){
                    $this->last_month_appointments_count++;
                }
            }

            //  all doctors
            $all_doctors = Doctor::all();
            foreach ($all_doctors as $value) {
                if(Carbon::parse($value->created_at)->isBetween(Carbon::today()->subWeek(),Carbon::today())){
                    $this->last_week_doctor_count++;
                }

                if(Carbon::parse($value->created_at)->isBetween(Carbon::today()->subMonth(),Carbon::today())){
                    $this->last_month_doctor_count++;
                }
            }

            //  all patients
            $all_patients = User::where('role',0)->get();
            foreach ($all_patients as $value) {
                if(Carbon::parse($value->created_at)->isBetween(Carbon::today()->subWeek(),Carbon::today())){
                    $this->last_week_patient_count++;
                }

                if(Carbon::parse($value->created_at)->isBetween(Carbon::today()->subMonth(),Carbon::today())){
                    $this->last_month_patient_count++;
                }
            }

    }
    public function render()
    {
        return view('livewire.statistic-component');
    }
}
