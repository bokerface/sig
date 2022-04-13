<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminTranscript extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-transcript')->layout('components.admin.layouts');
    }
}
