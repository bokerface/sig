<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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

    protected $messages = [
        'password.required' => 'Please enter password',
        'email.required' => 'Please enter username',
    ];


    public function login(Request $request)
    {
        $this->validate();

        $data = [
            'username' => $this->username,
            'password' => $this->password,
        ];

        // $user_data = [
        //     "user_id" => '20180520023',
        //     "fullname" => 'Puteri Syifa Ruhama',
        //     "dateofbirth" => 'January 21, 2003',
        //     "email" => $email,
        //     "role" => 3,
        //     "isLoggedIn" => true
        // ];

        // Session::put("user_data", $user_data);

        // return redirect()->to(route('home'));

        
    }

    public function logout() 
    {
        Session::flush();

        return redirect()->to(route('front'));
    }
}
