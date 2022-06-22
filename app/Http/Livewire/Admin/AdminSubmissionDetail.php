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

    public function mount($meta_id)
    {
        $this->submission = Submission::leftJoin('v_students', 'v_students.studentid', '=', 'submissions.student_id')
            ->findOrFail($meta_id);
        $this->metas = Meta::select(
            'metas.*',
            'fields.label',
            'fields.type',
        )
            ->where([
                ['metas.submission_id', '=', 3],
                ['metas.key', '!=', 'exchange_type']
            ])
            ->leftJoin('fields', 'fields.key', '=', 'metas.key')
            ->get();

        // dd($this->submission);
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
