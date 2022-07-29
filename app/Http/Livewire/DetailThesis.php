<?php

namespace App\Http\Livewire;

use App\Models\Meta;
use App\Models\Submission;
use Livewire\Component;
use Livewire\WithFileUploads;

class DetailThesis extends Component
{
    use WithFileUploads;

    public $submission_id;
    // public $submission;
    // public $metas;
    public $thesis_title;
    public $accompaniment_document;
    // public $accompaniment_done;

    public function mount($submission_id)
    {
        $this->submission_id = $submission_id;
        $this->thesis_title = Meta::where([
            ['submission_id', '=', $this->submission_id],
            ['key', '=', 'title']
        ])->first()->value;
    }

    public function render()
    {
        return view('livewire.detail-thesis', [
            'submission'
            => Submission::select(
                'v_students.STUDENTID',
                'v_students.FULLNAME',
                'submissions.*'
            )
                ->leftJoin('v_students', 'v_students.STUDENTID', '=', 'submissions.student_id')
                ->where([
                    ['submissions.id', '=', $this->submission_id],
                    ['submission_type', '=', 'secondary_supervisor']
                ])->firstOrFail(),
            'metas' => Meta::leftJoin('fields', 'fields.key', '=', 'metas.key')
                ->where([
                    ['submission_id', '=', $this->submission_id],
                    // ['metas.key', '!=', 'title'],
                    ['metas.key', '!=', 'supervisor'],
                ])->get(),
            'accompaniment_done' => !empty(Meta::where(
                [
                    ['submission_id', '=', $this->submission_id],
                    ['key', '=', 'accompaniment_document']
                ]
            )->first())
        ])->layout('components.supervisor.layouts');
    }

    public function verify_accompaniment()
    {
        $validateData = $this->validate([
            'accompaniment_document' => 'required|file|mimes:pdf,docx',
        ]);

        $accompaniment_document = $this->accompaniment_document->store('files', 'public');
        $validateData['accompaniment_document'] = $accompaniment_document;

        $meta = Meta::create([
            'submission_id' => $this->submission_id,
            'key' => 'accompaniment_document',
            'value' => $accompaniment_document
        ]);

        if ($meta) {
            return redirect()->back();
        }
    }
}
