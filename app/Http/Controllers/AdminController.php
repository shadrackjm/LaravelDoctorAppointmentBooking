<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function loadAdminDashboard()
    {
        return view('admin.dashboard');
    }

    public function loadDoctorListing()
    {
        return view('admin.doctor-listing');
    }

    public function loadDoctorForm(){
        return view('admin.doctor-form');
    }

    public function loadAllSpecialities(){
        return view('admin.specialities');
    }

    public function loadSpecialityForm(){
        return view('admin.speciality-form');
    }

    public function loadEditSpecialityForm($speciality_id){
        $id = $speciality_id;
        return view('admin.edit-speciality-form',compact('id'));
    }
}
