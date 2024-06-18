<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function loadDoctorDashboard()
    {
        return view('doctor.dashboard');
    }

    public function loadAllAppointments(){
        return view('doctor.appointments');
    }

     public function loadAllSchedules(){
        return view('doctor.schedules');
    }

    public function loadAddScheduleForm(){
        return view('doctor.schedule-form');
    }

    public function loadEditScheduleForm($schedule_id){
        $id = $schedule_id;
        return view('doctor.edit-schedule-form',compact('id'));
    }

    public function loadReschedulingForm($id){
        $appointment_id = $id;
        return view('doctor.reschedule-form',compact('appointment_id'));
    }
}
