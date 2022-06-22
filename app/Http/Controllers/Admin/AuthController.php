<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request) 
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

        $cridential = $request->only('username, password');

        if(Auth::attempt($cridential)) {
            $user = Auth::user();
            if($user) {
                return redirect()->intended('admin');
            } 
        }

        return redirect('admin/login');
    }
}
