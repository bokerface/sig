<?php

namespace App\Http\Livewire\Admin;

use App\Models\Meta;
use App\Models\Submission;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class AdminSubmissionDetail extends Component
{
    public $metas;
    public $submission;
    public $comment;
    public $status;
    public $submission_name;

    public function mount($meta_id)
    {
        $this->submission = Submission::select(
            'submissions.*',
            'v_students.studentid',
            'v_students.fullname',
            'letter_types.name as letter_type'
        )
            ->leftJoin('v_students', 'v_students.studentid', '=', 'submissions.student_id')
            ->leftJoin('letter_types', 'letter_types.id', '=', 'submissions.letter_types')
            ->findOrFail($meta_id);
        $this->metas = Meta::select(
            'metas.*',
            'fields.label',
            'fields.type',
        )
            ->where([
                ['metas.submission_id', '=', $this->submission->id],
                ['metas.key', '!=', 'exchange_type'],
                ['metas.key', '!=', 'letter_type'],
            ])
            ->leftJoin('fields', 'fields.key', '=', 'metas.key')
            ->get();

        $this->status = $this->submission->status;



        // dd($this->metas);
    }

    public function render()
    {
        return view('livewire.admin.admin-submission-detail')->layout('components.admin.layouts');
    }

    public function download($filename)
    {
        // dd($filename);
        return Storage::disk('public')->download($filename);
    }

    public function image($filename)
    {
        // dd($filename);
        return Storage::disk('public')->download($filename);
    }
}
