<?php

namespace App\Http\Livewire;

use App\Models\Meta;
use App\Models\Submission;
use Livewire\Component;

class SubmissionDetail extends Component
{
    public $metas;
    public $submission;
    public $comment;
    public $status;

    public function mount($meta_id)
    {
        $this->submission = Submission::findOrFail($meta_id);
        $this->metas = Meta::where([
            ['metas.submission_id', '=', 3],
            ['key', '!=', 'exchange_type']
        ])->get();

        // dd($this->metas);
    }

    public function render()
    {
        return view('livewire.submission-detail')->layout('components.layoutfront');
    }
}
