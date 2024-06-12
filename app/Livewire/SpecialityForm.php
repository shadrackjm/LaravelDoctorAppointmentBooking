<?php

namespace App\Livewire;

use App\Models\Specialities;
use Livewire\Component;

class SpecialityForm extends Component
{
    public $name = '';

    public function save(){

        $this->validate([
            'name' => 'required'
        ]);

        // save to db
        $save = new Specialities();
        $save->speciality_name = $this->name;
        $save->save();
        
        session()->flash('message','speciality created successfully');
        return $this->redirect('/admin/specialities',navigate: true);
    }
    public function render()
    {
        return view('livewire.speciality-form');
    }
}
