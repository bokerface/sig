<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminLetter extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-letter')->layout('components.admin.layouts');
    }
}
