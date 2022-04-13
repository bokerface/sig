<?php

namespace App\Http\Livewire;

use App\Models\Letter;
use App\Models\Meta;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FormLetterRecommendationExchange extends Component
{

    public $exchange_destination_id;

    public function render()
    {
        return view('livewire.form-letter-recommendation-exchange',
            [
                "destinations" => DB::table('exchange_destinations')->latest()->get()
            ]    
        )->layout('components.layoutfront');
    }

    public function handleForm() 
    {
        $this->validate([
            'exchange_destination_id' => 'required'
        ]);

        $letter = Letter::create([
            'student_id' => Session::get('user_data.user_id'),
            'letter_type_id' => 1,
            'status' => 0,            
        ])->id;

        if($letter) {

            $meta = Meta::create([
                'post_id' => $letter,
                'key' => 'exchange_destination_id',
                'value' => $this->exchange_destination_id,
                
            ]);
           
            $this->dispatchBrowserEvent('insert-success');

            $this->resetInput();
            
        }
        
    }

    private function resetInput() {
        $this->exchange_destination_id = '';     
    }
}
