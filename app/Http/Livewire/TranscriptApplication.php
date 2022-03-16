<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TranscriptApplication extends Component
{
    public function render()
    {
        return view('livewire.transcript-application')
        ->layout('components.layoutfront');
    }
}
