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
        $this->validate();

        $data = [
            'username' => $this->email,
            'password' => $this->password,
        ];

        $params = http_build_query($data);
        $email = $this->email;
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

                $this->error = 'sukses';

                $mahasiswa = DB::connection('sqlsrv')
                    ->table('v_student')
                    ->where('email', '=', $email)
                    ->first();

                if ($mahasiswa) {
                    $user_data = [
                        "user_id" => $mahasiswa->studentid,
                        "fullname" => $mahasiswa->fullname,
                        "dateofbirth" => $mahasiswa->dateofbirth,
                        "email" => $mahasiswa->email,
                        "role" => 3,
                        "isLoggedIn" => true
                    ];

                    Session::put("user_data", $user_data);

                    return redirect()->to(route('home'));
                }
            } else {
                session()->flash('error', 'Wrong email or password.');
            }

        
    }

    public function logout() 
    {
        Session::flush();

        return redirect('login');
    }
}
