<?php

namespace App\Http\Livewire;

use App\Models\Submission;
use Illuminate\Support\Facades\Session;
use App\Models\Meta;
use Carbon\Carbon;

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
            'letter_types' => 15,
            'status' => 0,
        ])->id;

        if($letter) {
            Meta::create(
                [
                    'submission_id' => $letter,
                    'key' => 'letter_publish_date',
                    'value' => Carbon::now()
                ]
            );   

        }

        return redirect('download-transcript/' . $letter);
    }
}
