<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Specialities;
use Illuminate\Http\Request;

class PatientController extends Controller
{

     public function loadDoctorBySpeciality($speciality_id){
        $id = $speciality_id;
        $speciality = Specialities::find($id);

        return view('patient.doctor-by-speciality',compact('id','speciality'));
    }

    public function loadMyAppointments(){
        return view('patient.my-appointments');
    }

    public function loadArticles(){
        return view('patient.articles');
    }

    public function loadBookingPage($id){
        $doctor = Doctor::with('speciality','doctorUser')->where('id',$id)->first();
        return view('patient.booking-page',compact('doctor'));
    }

    public function loadAllDoctors(){
        return view('patient.all-doctors');
    }

    public function loadReschedulingForm($id){
        $appointment_id = $id;
        return view('patient.reschedule-form',compact('appointment_id'));
    }

    public function loadLiveConsultationPage(){
        return view('patient.live-consultation');
    }
}
