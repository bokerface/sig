<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Inbox extends Component
{
    public function render()
    {
        return view('livewire.inbox',
        [
            "submissions" => DB::table('submissions')->latest()->get()
        ]   

        )
        ->layout('components.layoutfront');
    }
}
