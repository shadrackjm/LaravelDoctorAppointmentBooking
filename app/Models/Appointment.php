<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'patient_id',
        'appointment_date',
        'appointment_time',
        'appointment_type',
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }

    public function patient(){
        return $this->belongsTo(User::class,'patient_id');
    }

    public function scopeSearch($query, $value){
        $query->where('appointment_date','like',"%{$value}%")
                ->orWhere('appointment_time','like',"%{$value}%")
            ->orWhereHas('doctor.doctorUser', function($q) use ($value) {
                $q->where('name', 'like', "%{$value}%");
            })
            ->orWhereHas('patient', function($q) use ($value) {
                $q->where('name', 'like', "%{$value}%");
            });
    }
}
