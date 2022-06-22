<?php

namespace App\Http\Livewire\Admin;
use App\Models\Exchange;

use Livewire\Component;

class AdminExchangeDetail extends Component
{

    public $fullname;
    public $student_id;
 
    public function mount($id)
    {
        $exchange = Exchange::find($id);

        $this->student_id = $exchange->student_id;
        
    }

    public function render()
    {
        return view('livewire.admin.admin-exchange-detail')->layout('components.admin.layouts');
    }
    
}
