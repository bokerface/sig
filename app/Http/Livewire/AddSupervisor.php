<?php

namespace App\Http\Livewire;

use App\Models\Supervisor;
use Livewire\Component;

class AddSupervisor extends Component
{
    public $name;
    public $note;

    public function render()
    {
        return view('livewire.add-supervisor')
            ->layout('components.admin.layouts');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string',
            'note' => 'required|string',
        ]);

        Supervisor::create([
            'name' => $this->name,
            'keterangan' => $this->note,
        ]);

        return redirect()->to(route('supervisor'));
    }
}
