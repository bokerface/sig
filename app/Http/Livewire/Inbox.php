<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Inbox extends Component
{
    public function render()
    {
        // dd(session('user_data'));
        return view(
            'livewire.inbox',
            [
                "submissions" => DB::table('submissions')->latest()->get()
            ]

        )
            ->layout('components.layoutfront');
    }

    public function siapi()
    {
        echo "api";
    }
}
