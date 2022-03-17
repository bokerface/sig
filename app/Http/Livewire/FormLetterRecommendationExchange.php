<?php

namespace App\Http\Livewire;

use App\Models\Letter;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class FormLetterRecommendationExchange extends Component
{

    public $letter_type_id;
    // public $exchange_destination_id;
    public $created_at;

    public function render()
    {
        return view('livewire.form-letter-recommendation-exchange');
    }

    public function handleForm() 
    {
        // $this->validate([
        //     'exchange_destination_id' => 'required'
        // ]);

        $letter = Letter::create([
            'student_id' => Session::get('user_data.user_id'),
            'letter_type_id' => $this->letter_type_id,
            'status' => 0,
            // 'exchange_destination_id' => $this->exchange_destination_id,
        ]);

        if($letter) {
            session()->flash('success', 'Success');
        }
        
    }
}
