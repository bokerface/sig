<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InboxDetail extends Component
{
    public function render()
    {
        return view('livewire.inbox-detail')
        ->layout('components.layoutfront');
    }
}
