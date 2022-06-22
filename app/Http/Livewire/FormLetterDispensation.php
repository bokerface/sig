<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Submission;
use App\Models\Meta;
use Illuminate\Support\Facades\Session;
use Livewire\WithFileUploads;

class FormLetterDispensation extends Component
{
    public $statement_letter;

    use WithFileUploads;

    public function render()
    {
        return view('livewire.form-letter-dispensation')->layout('components.layoutfront');
    }

    public function handleForm()
    {
        $validateData = $this->validate([
            'statement_letter' => 'required|file|mimes:pdf',
        ]);

        $statement_letter = $this->statement_letter->store('files', 'public');
        $validateData['statement_letter'] = $statement_letter;

        $letter = Submission::create([
            'student_id' => Session::get('user_data.user_id'),
            'submission_type' => 'letter',
            'status' => 0,
        ])->id;

        if ($letter) {

            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'statement_letter',
                'value' => $statement_letter,

            ]);
            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'letter_type',
                'value' => 5, //Letter of Dispensation For Payment

            ]);

            $this->dispatchBrowserEvent('insert-success');
        }
    }
}
