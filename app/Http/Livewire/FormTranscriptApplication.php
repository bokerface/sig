<?php

namespace App\Http\Livewire;
use App\Models\Transcript;
use Illuminate\Support\Facades\Session;

use Livewire\Component;

class FormTranscriptApplication extends Component
{
    public function render()
    {
        return view('livewire.form-transcript-application')
        ->layout('components.layoutfront');
    }

    public function handleForm() 
    {        

        $transcript = Transcript::create([
            'student_id' => Session::get('user_data.user_id'),           
            'status' => 0,            
        ])->id;

        if($transcript) {
            $this->dispatchBrowserEvent('insert-success');    
        }

    }
}
