<?php

namespace App\Http\Livewire;

use App\Models\Supervisor;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddSupervisor extends Component
{
    public $username;
    public $name;
    public $phone_number;
    public $email;
    public $profile;
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.add-supervisor')
            ->layout('components.admin.layouts');
    }

    public function store()
    {
        $this->validate([
            'username' => 'unique:users,username|required|string',
            'name' => 'required|string',
            'phone_number' => 'required|numeric',
            'email' => 'required|email',
            'profile' => 'required|string',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required|string'
        ]);

        $user = User::create([
            'username' => $this->username,
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'level' => 2
        ]);

        if ($user) {
            Supervisor::create([
                'user_id' => $user->id,
                'name' => $this->name,
                'keterangan' => $this->profile,
                'phone' => $this->phone_number,
                'email' => $this->email,
            ]);
            return redirect()->to(route('supervisor'));
        }
    }
}
