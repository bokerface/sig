<?php

namespace App\Http\Livewire;

use App\Models\Submission;
use App\Models\Meta;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FormLetterActiveStudent extends Component
{
    public $purpose;

    public function render()
    {
        return view('livewire.form-letter-active-student')->layout('components.layoutfront');
    }

    public function handleForm() 
    {  
        $validateData = $this->validate([
            'purpose' => 'required',
        ]);

        $letter = Submission::create([
            'student_id' => Session::get('user_data.user_id'),
            'submission_type' => 'letter',
            'status' => 0,    
            'letter_types' => 3,        
        ])->id;

        if($letter) {
            
            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'letter_type',
                'value' => 3, //letter active student
                
            ]);

            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'purpose',
                'value' => $this->purpose,

            ]);

            $this->dispatchBrowserEvent('insert-success');

            // return redirect('download-letter-active-student/' . $letter);
        }
        
    }
}
