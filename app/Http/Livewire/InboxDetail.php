<?php

namespace App\Http\Livewire;

use App\Models\Meta;
use App\Models\Submission;
use Illuminate\Support\Facades\Storage;

use Livewire\Component;

class InboxDetail extends Component
{
    public $submission;
    public $metas;

    // data for specific submission
    public $supervisor;

    public function mount($id)
    {


        $this->submission = Submission::select(
            'submissions.*',
            'letter_types.name as letter_type'
        )
            ->leftJoin('metas', function ($join) {
                $join->on('metas.submission_id', '=', 'submissions.id');
                $join->where('metas.key', '=', 'letter_type');
            })
            ->leftJoin('letter_types', 'letter_types.id', '=', 'metas.value')
            ->findOrFail($id);
        $this->metas = Meta::where('submission_id', '=', $id)->get();

        if ($this->submission->letter_types == 13) {
            $this->supervisor = Meta::where(
                [
                    ['submission_id', '=', $id],
                    ['key', '=', 'supervisor']
                ]
            )
                ->leftJoin('supervisors', 'supervisors.id', '=', 'metas.value')
                ->first();
        }
        // dd($this->submission);
    }

    public function render()
    {
        return view('livewire.inbox-detail')
            ->layout('components.layoutfront');
    }

    public function download($filename)
    {
        return Storage::disk('public')->download($filename);
    }
}
