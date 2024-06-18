<?php

namespace App\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use App\Models\Specialities;
use App\Models\User;

class EditDoctor extends Component
{

    public $doctor;
    public $doctor_details;
    public $name;
    public $email;
    public $bio;
    public $speciality_id;
    public $hospital_name;
    public $twitter = '';
    public $instagram = '';
    public $experience = '';
    public $specialities;


    public function mount($doctor_id){
        $this->doctor = Doctor::find($doctor_id);

        $this->specialities = Specialities::all();

        $this->name = $this->doctor->doctorUser->name;
        $this->email = $this->doctor->doctorUser->email;
        $this->bio = $this->doctor->bio;
        $this->speciality_id = $this->doctor->speciality->id;
        $this->hospital_name = $this->doctor->hospital_name;
        $this->experience = $this->doctor->experience;
    }

    public function update(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'bio' => 'required',
            'hospital_name' => 'required',
            'speciality_id' => 'required',
            'twitter' => 'string',
            'instagram' => 'string',
            'experience' => 'required',
        ]);

        $update = Doctor::where('id',$this->doctor->id)->update([
            'bio' => $this->bio,
            'hospital_name' => $this->hospital_name,
            'speciality_id' => $this->speciality_id,
            'twitter' => $this->twitter,
            'instagram' => $this->instagram,
            'experience' => $this->experience,
        ]);

        $user_update = User::where('id',$this->doctor->user_id)->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        

        session()->flash('message','Doctor Updated Successfully');
        return $this->redirect('/admin/doctors', navigate: true);

    }
    public function render()
    {
        return view('livewire.edit-doctor');
    }
}
