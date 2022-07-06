<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class AdminSecondarySupervisor extends Component
{
    public $search;
    public $paginate = 5;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

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
            ->where('submissions.submission_type', '=', 'secondary_supervisor')
            ->leftJoin('v_students', 'submissions.student_id', '=', 'v_students.studentid')
            ->latest()->paginate($this->paginate);

        // dd($submissions);

        return view(
            'livewire.admin.admin-secondary-supervisor',
            [
                "submissions" => $this->search === null ?
                    $submissions :
                    DB::table('submissions')
                    ->select('submissions.id', 'submissions.student_id', 'v_students.fullname',  'submissions.created_at', 'submissions.status')
                    ->where('submissions.submission_type', '=', 'secondary_supervisor')
                    ->orWhere('v_students.fullname', 'like', '%' . $this->search . '%')
                    ->orWhere('submissions.student_id', 'like', '%' . $this->search . '%')
                    ->leftJoin('v_students', 'submissions.student_id', '=', 'v_students.studentid')
                    ->latest()->paginate($this->paginate),
            ]
        )->layout('components.admin.layouts');
    }

    public function getMeta($id)
    {
        $meta =  [
            'metaContent' => DB::table('metas')
                ->select('metas.*')
                ->where('submission_id', '=', $id)
                ->get()->toArray(),

            'submission' => DB::table('submissions')
                ->select('submissions.id', 'submissions.student_id', 'v_students.fullname',  'submissions.created_at', 'submissions.status')
                ->where('submissions.submission_type', '=', 'letter')
                ->Where('submissions.id', '=', $id)
                ->leftJoin('v_students', 'submissions.student_id', '=', 'v_students.studentid')
                ->first()
        ];

        $this->emit('getMeta', $meta);
    }
}
