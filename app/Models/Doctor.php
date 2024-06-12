<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
            'bio' => 'required',
            'hospital_name' => 'required',
            'speciality_id' => 'required',
            'twitter' => 'string',
            'instagram' => 'string',
            'experience' => 'required',
    ];

    
}
