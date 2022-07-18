<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

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


        $link = Http::withHeaders([])->post('https://sso.umy.ac.id/api/Authentication/Login', [
            'username' => $this->username,
            'password' => $this->password,
        ])->object();

        $ceknum = $link->code;

        if ($ceknum == 0) {

            $user = DB::table('v_students')
                ->where('email', '=', $this->username)
                ->first();

            // dd($user);

            if ($user) {

                $year = date('Y');
                $thn_ajaran = (date('n') <= 6) ? $year - 1 : $year;
                $first_semester = [8, 9, 10, 11, 12, 1];
                $second_semester = [2, 3, 4, 5, 6, 7];
                if (in_array(date('n'), $first_semester)) {
                    $current_semester = 1;
                } elseif (in_array(date('n'), $second_semester)) {
                    $current_semester = 2;
                }

                $send =
                    Http::withHeaders([])->post('https://krs.umy.ac.id/WebApi/Info/GetStatusAktif', [
                        'ClientId' => 'SiGov',
                        'Credential' => 'F3BC28F09FC5F33B453030D763B06369EC708AED70634A5901C93CF7244FFB35',
                        'NIM' => $user->STUDENTID,
                        'TahunAjaran' => $thn_ajaran,
                        'Semester' => $current_semester
                    ])->object();

                if ($send->Status == 1) {
                    $user_data = [
                        // "user_id" =>  $user->studentid,
                        // "fullname" =>  $user->fullname,
                        // "dateofbirth" =>  $user->dateofbirth,
                        // "placeofbirth" =>  $user->placeofbirth,
                        // "email" => $user->email,
                        "user_id" =>  $user->STUDENTID,
                        "fullname" =>  $user->FULLNAME,
                        "dateofbirth" =>  $user->DATEOFBIRTH,
                        "placeofbirth" =>  $user->PLACEOFBIRTH,
                        "email" => $user->EMAIL,
                        "role" => 3,
                        "isLoggedIn" => true
                    ];

                    Session::put("user_data", $user_data);

                    return redirect()->to(route('home'));
                }
                return redirect()->back()->with('error', $send->Message);
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
