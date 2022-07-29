<?php

namespace App\Http\Livewire;

use App\Models\Submission;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListThesisProposal extends Component
{
    public $paginate = 5;

    public function mount()
    {
        // $this->submissions = Submission::where('submission_type')
    }

    public function render()
    {
        $submissions = DB::table('submissions')
            ->select(
                'submissions.id',
                'submissions.student_id',
                'v_students.fullname',
                'submissions.created_at',
                'submissions.status',
            )
            ->leftJoin('v_students', 'submissions.student_id', '=', 'v_students.studentid')
            ->leftJoin('metas', function ($query) {
                $query->on('submissions.id', '=', 'metas.submission_id');
                $query->where('metas.key', '=', 'supervisor');
            })
            ->where([
                ['submissions.submission_type', '=', 'secondary_supervisor'],
                ['metas.value', '=', session('admin_data')['id']]
            ])
            ->latest()
            ->paginate($this->paginate);

        // dd($submissions);

        return view(
            'livewire.list-thesis-proposal',
            ['submissions' => $submissions]
        )
            ->layout('components.supervisor.layouts');
    }
}
