<?php

namespace App\Http\Livewire;

use App\Models\Supervisor;
use Livewire\Component;

class AddSupervisor extends Component
{
    public $name;
    public $profile;
    public $phone_number;
    public $email;

    public function render()
    {
        return view('livewire.add-supervisor')
            ->layout('components.admin.layouts');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string',
            'profile' => 'required|string',
            'phone_number' => 'required|numeric',
            'email' => 'required|email',
        ]);

        Supervisor::create([
            'name' => $this->name,
            'keterangan' => $this->profile,
            'phone' => $this->phone_number,
            'email' => $this->email,
        ]);

        return redirect()->to(route('supervisor'));
    }
}
