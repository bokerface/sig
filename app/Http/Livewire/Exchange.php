<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Exchange extends Component
{
    public function render()
    {
        return view('livewire.exchange')
        ->layout('components.layoutfront');
    }
}
