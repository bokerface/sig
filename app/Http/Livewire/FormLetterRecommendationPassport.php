<?php

namespace App\Http\Livewire;

use App\Models\Letter;
use App\Models\Meta;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FormLetterRecommendationPassport extends Component
{
    public function render()
    {
        return view('livewire.form-letter-recommendation-passport')->layout('components.layoutfront');
    }

    public function handleForm() 
    {        
        $letter = Letter::create([
            'student_id' => Session::get('user_data.user_id'),
            'letter_type_id' => 2,
            'status' => 0,            
        ])->id;

        if($letter) {           
            $this->dispatchBrowserEvent('insert-success');
        }
        
    }
}
