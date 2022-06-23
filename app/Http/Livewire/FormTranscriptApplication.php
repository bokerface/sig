<?php

namespace App\Http\Livewire;

use App\Models\Submission;
use Illuminate\Support\Facades\Session;
use PDF;

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

        $letter = Submission::create([
            'student_id' => Session::get('user_data.user_id'),
            'submission_type' => 'transcript',
            'status' => 0, 
        ])->id;

        // if($letter) {
        //     $this->dispatchBrowserEvent('insert-success');    
        // }

        return redirect('download-transcript/' . $letter);
    }

    
}
