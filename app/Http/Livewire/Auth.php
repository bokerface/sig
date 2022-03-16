<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Auth extends Component
{
    public $error, $email, $password;

    public function render()
    {
        return view('livewire.auth')
        ->layout('components.layoutnologin');
    }

    protected $rules = [
        'password' => 'required',
        'email' => 'required',
    ];

    public function login()
    {
        $email = 'puteri.syifa.ruhama@mail.umy.ac.id';
        
        $data = [
            'username' => $email,
            'password' => 'pass',
        ];

        $user_data = [
            "user_id" => '20180520023',
            "fullname" => 'Puteri Syifa Ruhama',
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

        return redirect('login');
    }
}
