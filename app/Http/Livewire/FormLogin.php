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

    public $error, $username, $password;


    protected $rules = [
        'password' => 'required',
        'username' => 'required|email',
    ];

    protected $messages = [
        'password.required' => 'Please enter password',
        'username.required' => 'Please enter your email',
        'username.email' => 'Please enter valid email',
    ];


    public function login(Request $request)
    {
        $this->validate();

        $data = [
            'username' => $this->username,
            'password' => $this->password,
        ];

        $params = http_build_query($data);
        $body = array('http' =>
        array(
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => $params
        ));
        $context = stream_context_create($body);
        $link = file_get_contents('https://sso.umy.ac.id/api/Authentication/Login', false, $context);
        $json = json_decode($link);

        $ceknum = $json->{'code'};

        if ($ceknum == 0) {

            $user = DB::table('v_students')
                ->where('email', '=', $this->username)
                ->first();

            if ($user) {
                $user_data = [
                    "user_id" =>  $user->studentid,
                    "fullname" =>  $user->fullname,
                    "dateofbirth" =>  $user->dateofbirth,
                    "placeofbirth" =>  $user->placeofbirth,
                    "email" => $user->email,
                    // "user_id" =>  $user->STUDENTID,
                    // "fullname" =>  $user->FULLNAME,
                    // "dateofbirth" =>  $user->DATEOFBIRTH,
                    // "placeofbirth" =>  $user->PLACEOFBIRTH,
                    // "email" => $user->EMAIL,
                    "role" => 3,
                    "isLoggedIn" => true
                ];

                Session::put("user_data", $user_data);

                return redirect()->to(route('home'));
            } else {
                return back()->with('error', 'You are not allowed to access this apps.');
            }
        } else {
            return back()->with('error', 'Wrong username or password.');
        }
    }

    public function logout()
    {
        Session::flush();

        return redirect()->to(route('login'));
    }
}
