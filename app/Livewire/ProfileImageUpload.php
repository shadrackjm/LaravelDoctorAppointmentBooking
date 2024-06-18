<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ProfileImageUpload extends Component
{
    use WithFileUploads;
    public $profile_image;


    public function mount(){
        $this->profile_image = auth()->user()->profile_image;
    }
    public function save(){
        $this->validate([
            'profile_image' => ['nullable', 'image', 'max:1024'],
        ]);
        // // Handle the image upload if a new file is uploaded
        if ($this->profile_image) {

            $path = $this->profile_image->store('public/images');
            // $url = Storage::url($path);
            // dd($url);

            $user = User::find(auth()->user()->id);

            $user->update([
                'profile_image' => $path,
            ]);
            $this->dispatch('profile-updated', name: $user->name);

            return $this->redirect('/profile', navigate: true);
        }
    }
    public function render()
    {
        return view('livewire.profile-image-upload');
    }
}
