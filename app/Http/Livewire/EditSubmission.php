<?php

namespace App\Http\Livewire;

use App\Models\Meta;
use App\Models\Submission;
use Livewire\Component;

class EditSubmission extends Component
{
    public $submission;
    public $submission_field_values;

    public function mount($submission_id)
    {
        $this->submission = Submission::findOrFail($submission_id);
        $this->submission_field_values = Meta::select('metas.*', 'fields.label', 'fields.type')
            ->where('submission_id', '=', $this->submission->id)
            ->leftJoin('fields', 'fields.key', '=', 'metas.key')
            ->get();
    }

    public function render()
    {
        // dd($this->submission_field_values);
        return view('livewire.edit-submission')
            ->layout('components.layoutfront');
    }
}
