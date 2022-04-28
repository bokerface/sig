<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InstitutionDestination extends Component
{
    public function render()
    {
        return view('livewire.institution-destination')
            ->layout('components.admin.layouts');
    }
}
