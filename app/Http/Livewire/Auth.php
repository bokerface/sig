<?php

namespace App\Http\Livewire;


use Livewire\Component;

class Auth extends Component
{
    public $error, $email, $password;

    public function render()
    {
        return view('livewire.auth')
        ->layout('components.layoutnologin');
    }
   
}
