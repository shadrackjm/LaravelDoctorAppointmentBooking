<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function loadDoctorDashboard()
    {
        return view('doctor.dashboard');
    }
}
