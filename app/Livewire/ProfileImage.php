<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ProfileImage extends Component
{
    public $user_details;

    public function mount($user_id){
        $this->user_details = User::find($user_id);

    }
    public function render()
    {
        return view('livewire.profile-image');
    }
}
