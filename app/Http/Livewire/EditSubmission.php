<?php

namespace App\Http\Livewire;

use App\Models\Meta;
use App\Models\Submission;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSubmission extends Component
{
    use WithFileUploads;

    protected $listeners = [
        'reload'
    ];

    public $submission;
    public $submission_field_values;

    public $field_id;

    public function mount($submission_id)
    {
        $this->submission = Submission::where([
            ['id', '=', $submission_id],
            ['status', '=', 2]
        ])
            ->firstOrFail();
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

    public function reload()
    {
        $this->mount($this->submission->id);
        $this->render();
    }
}
