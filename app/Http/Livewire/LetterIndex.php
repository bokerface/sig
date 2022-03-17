<?php

namespace App\Http\Livewire;

use App\Models\LetterType;
use Livewire\Component;

class LetterIndex extends Component
{
    public function render()
    {
        return view('livewire.letter-index')
        ->layout('components.layoutfront');
    }
}
