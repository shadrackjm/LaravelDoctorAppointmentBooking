<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified','patient']) //role == 0
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get('/doctor/dashboard',[DoctorController::class,'loadDoctorDashboard'])
->name('doctor-dashboard')
->middleware('doctor');

Route::get('/admin/dashboard',[AdminController::class,'loadAdminDashboard'])
->name('admin-dashboard')
->middleware('admin');

require __DIR__.'/auth.php';
