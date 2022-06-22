<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AdminDashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboard',
            [
            'exchange' => DB::table('submissions')
                ->where('submission_type','=', 'exchange')
                ->count(),            
            'letter' => DB::table('submissions')
                ->where('submission_type','=', 'letter')
                ->count(),            
            'transcript' => DB::table('submissions')
                ->where('submission_type','=', 'transcript')
                ->count(),            
            'secondary_supervisor' => DB::table('submissions')
                ->where('submission_type','=', 'secondary_supervisor')
                ->count(),            
            ]
        )
        ->layout('components.admin.layouts');
    }
}
