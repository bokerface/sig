<?php

namespace App\Http\Livewire\Admin;

use App\Models\Submission;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class AdminExchange extends Component
{
<<<<<<< HEAD
    public $meta;
    public $click;
    public $search;
    public $status;
    public $paginate = 5;


    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'setStatus' => 'setStatus',
    ];

    public function render()
    {
        $exchanges = DB::table('submissions')
            ->select('submissions.id', 'submissions.student_id', 'v_students.fullname',  'submissions.created_at', 'submissions.status')
            ->where('submissions.submission_type', '=', 'exchange')
            ->leftJoin('v_students', 'submissions.student_id', '=', 'v_students.studentid')
            ->latest()->paginate($this->paginate);

        return view(
            'livewire.admin.admin-exchange',
            [
                "exchanges" => $this->search === null ?
                    $exchanges :
                    DB::table('submissions')
                    ->select('submissions.id', 'submissions.student_id', 'v_students.fullname',  'submissions.created_at', 'submissions.status')
                    ->where('submissions.submission_type', '=', 'exchange')
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
                ->select(
                    'metas.*',
                    'fields.type',
                    'fields.label',

                )
                ->leftJoin('fields', 'fields.key', '=', 'metas.key')
                ->where('submission_id', '=', $id)
                ->get()->toArray(),

            'submission' => DB::table('submissions')
                ->select('submissions.id', 'submissions.student_id', 'v_students.fullname',  'submissions.created_at', 'submissions.status')
                ->where('submissions.submission_type', '=', 'exchange')
                ->Where('submissions.id', '=', $id)
                ->leftJoin('v_students', 'submissions.student_id', '=', 'v_students.studentid')
                ->first(),

            // 'status' => '2',

            'status' => Submission::find($id)->status

        ];

        $this->emit('getMeta', $meta);
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
=======
    public $ids;
    public $fullname;
    public $student_id;
    public $metass;
    public $modalOpen;

    public function detail($id)
    {
        $exchange =  DB::table('exchanges')
            ->select('exchanges.student_id', 'v_students.fullname', 'exchanges.created_at')
            ->where('exchanges.id', '=', $id)
            ->leftJoin('v_students', 'exchanges.student_id', '=', 'v_students.studentid')
            ->first();

        $this->ids = $id;
        $this->student_id = $exchange->student_id;
        $this->fullname = $exchange->fullname;
        $this->modalOpen = true;

        $metas = DB::table('metas')
            ->select('metas.*')
            ->where('post_id', '=', $id)
            ->where('post_type', '=', 'exchange')
            ->get();

        $this->metass = $metas;
        // dd($metas);
    }

    public function render()
    {
        return view(
            'livewire.admin.admin-exchange',
            [
                "exchanges" => DB::table('exchanges')
                    ->select('exchanges.id', 'exchanges.student_id', 'v_students.fullname', 'exchanges.created_at', 'exchanges.status')
                    // ->where('exchanges.id', '=', $id)
                    ->leftJoin('v_students', 'exchanges.student_id', '=', 'v_students.studentid')
                    ->latest()->get(),
            ]
        )->layout('components.admin.layouts');
    }
>>>>>>> main
}
