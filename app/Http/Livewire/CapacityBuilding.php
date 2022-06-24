<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;

use App\Models\LetterType;
use App\Models\Meta;
use App\Models\Submission;
use Livewire\Component;

class CapacityBuilding extends Component
{
    public $phone_number;
    public $motivation;
    public $letter_type;
    protected $rules = [
        'phone_number' => 'numeric|required',
        'motivation' => 'string|required',
    ];

    public function mount($id)
    {
        $this->letter_type = LetterType::where('id', '=', $id)
            ->whereIn('id', [7, 8, 9, 10, 11, 12])
            ->firstOrFail();
        // dd($this->letter_type);
    }

    public function render()
    {
        return view('livewire.capacity-building')->layout('components.layoutfront');
    }

    public function handleForm()
    {
        $this->validate();

        $submission = Submission::create(
            [
                'student_id' => Session::get('user_data.user_id'),
                'submission_type' => 'capacity_building',
                'letter_types' => $this->letter_type->id,
                'status' => 0
            ]
        );

        if ($submission) {
            Meta::create(
                [
                    'submission_id' => $submission->id,
                    'key' => 'letter_type',
                    'value' => $this->letter_type->id
                ]
            );

            Meta::create(
                [
                    'submission_id' => $submission->id,
                    'key' => 'phone_number',
                    'value' => $this->phone_number
                ]
            );

            Meta::create(
                [
                    'submission_id' => $submission->id,
                    'key' => 'motivation',
                    'value' => $this->motivation
                ]
            );

            $this->dispatchBrowserEvent('insert-success');
            $this->resetInput();
        }
    }

    private function resetInput()
    {
        $this->phone_number = '';
        $this->motivation = '';
    }
}
