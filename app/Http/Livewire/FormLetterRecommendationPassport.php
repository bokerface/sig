<?php

namespace App\Http\Livewire;

use App\Models\Meta;
use Livewire\Component;
use App\Models\Submission;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FormLetterRecommendationPassport extends Component
{
    public $imigration_office;

    public function render()
    {
        return view('livewire.form-letter-recommendation-passport')->layout('components.layoutfront');
    }

    public function handleForm()
    {
        $this->validate([
            'imigration_office' => 'required',
        ]);

        $letter = Submission::create([
            'student_id' => Session::get('user_data.user_id'),
            'submission_type' => 'letter',
            'status' => 0,
        ])->id;

        if ($letter) {

            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'imigration_office',
                'value' => $this->imigration_office,
            ]);
            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'letter_type',
                'value' => 2, //recommendation passport
            ]);


            $this->resetInput();

            return redirect('download-recommendation-passport/' . $letter);
        }
    }

    private function resetInput()
    {
        $this->imigration_office = '';
        $this->motivation_letter = '';
        $this->passport = '';
        $this->certificate = '';
        $this->photo = '';
    }
}
