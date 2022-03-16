<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SecondarySupervisor extends Component
{
    public function render()
    {
        return view('livewire.secondary-supervisor')
        ->layout('components.layoutfront');
    }
}
