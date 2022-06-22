<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    protected $listeners = ['refreshHhildren' => 'refreshMe'];

    public function refreshMe() 
    {
        //
    }
    public function render()
    {
        return view('livewire.profile')
        ->layout('components.layoutfront');
    }
}
