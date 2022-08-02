<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AllNews extends Component
{
    public function render()
    {
        return view('livewire.all-news')->layout('components.layoutfront');
    }
}
