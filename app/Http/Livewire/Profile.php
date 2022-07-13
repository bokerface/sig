<?php

namespace App\Http\Livewire;

use App\Models\Students;
use Livewire\Component;

class Profile extends Component
{
    protected $listeners = ['refreshHhildren' => 'refreshMe'];

    public function refreshMe()
    {
        //
    }
    public function render()
    {
        return view(
            'livewire.profile',
            [
                'phone' => Students::where('STUDENTID', '=', session('user_data')['user_id'])->first()->TELP
            ]
        )
            ->layout('components.layoutfront');
    }
}
