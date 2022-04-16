<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FormLogin extends Component
{
    public function render()
    {
        return view('livewire.form-login')
        ->layout('components.layoutnologin');
    }

    public $error, $email, $password;
   

    protected $rules = [
        'password' => 'required',
        'email' => 'required',
    ];

    public function login()
    {
        $email = 'nila.jihan@umy.ac.id';
        
        $data = [
            'username' => $email,
            'password' => 'pass',
        ];

        $user_data = [
            "user_id" => '20180520002',
            "fullname" => 'Nila Jihan Shelamita',
            "email" => $email,
            "role" => 3,
            "isLoggedIn" => true
        ];

        Session::put("user_data", $user_data);

        return redirect()->to(route('home'));

        
    }

    public function logout() 
    {
        Session::flush();

        return redirect()->to(route('front'));
    }
}
