<?php

namespace App\Http\Livewire;

use App\Models\Submission;
use App\Models\Meta;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FormLetterInternshipProgram extends Component
{
    public $company_destination;
    public $duration;
    public $send_to;
    public function render()
    {
        return view('livewire.form-letter-internship-program')->layout('components.layoutfront');
    }

    public function handleForm()
    {
        $this->validate([
            'company_destination' => 'required',
            'duration' => 'required',
            'send_to' => 'required',
        ]);

        $letter = Submission::create([
            'student_id' => Session::get('user_data.user_id'),
            'submission_type' => 'letter',
            'status' => 0,
        ])->id;

        if ($letter) {

            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'company_destination',
                'value' => $this->company_destination,

            ]);
            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'duration',
                'value' => $this->duration,

            ]);
            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'send_to',
                'value' => $this->send_to,

            ]);
            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'letter_type',
                'value' => 4, //recommendation exchange

            ]);

            $this->dispatchBrowserEvent('insert-success');
        }
    }
}
