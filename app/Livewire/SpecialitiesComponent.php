<?php

namespace App\Livewire;

use App\Models\Specialities;
use Livewire\Component;

class SpecialitiesComponent extends Component
{

    public function delete($speciality_id){

        $speciality = Specialities::find($speciality_id);

        $speciality->delete();

        session()->flash('message','speciality deleted successfully');

        return $this->redirect('/admin/specialities', navigate: true);
    }
    public function render()
    {
        return view('livewire.specialities-component',[
            'specialities' => Specialities::all()
        ]);
    }
}
