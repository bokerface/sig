<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class AdminLetter extends Component
{

    public $search;
    public $paginate = 5;
    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        $submissions = DB::table('submissions')
                    ->select('submissions.id', 'submissions.student_id', 'v_students.fullname',  'submissions.created_at', 'submissions.status', 'submissions.letter_types', 'letter_types.name')
                    ->where('submissions.submission_type','=', 'letter')
                    ->leftJoin('letter_types', 'letter_types.id', '=', 'submissions.letter_types')
                    ->leftJoin('v_students', 'submissions.student_id', '=', 'v_students.studentid')                    
                    ->latest()->paginate($this->paginate);

        return view('livewire.admin.admin-letter',
        
        [
            "submissions" => $this->search === null ?                
            $submissions:
            DB::table('submissions')
                ->select('submissions.id', 'submissions.student_id', 'v_students.fullname',  'submissions.created_at', 'submissions.status', 'submissions.letter_types', 'letter_types.name')
                ->where('submissions.submission_type','=', 'letter')
                ->leftJoin('letter_types', 'letter_types.id', '=', 'submissions.letter_types')
                ->orWhere('v_students.fullname', 'like', '%'. $this->search .'%')
                ->orWhere('submissions.student_id', 'like', '%'. $this->search .'%')
                ->leftJoin('v_students', 'submissions.student_id', '=', 'v_students.studentid')
                ->latest()->paginate($this->paginate),

        ] 
        )->layout('components.admin.layouts');
    }

    public function getMeta($id) 
    {       

        $meta =  [
            'metaContent'=> DB::table('metas')
                ->select('metas.*')
                ->where('submission_id', '=', $id)
                ->get()->toArray(),

            'submission' => DB::table('submissions')
                ->select('submissions.id', 'submissions.student_id', 'v_students.fullname',  'submissions.created_at', 'submissions.status')
                ->where('submissions.submission_type','=', 'letter')
                ->where('submissions.id', '=', $id)
                ->leftJoin('v_students', 'submissions.student_id', '=', 'v_students.studentid')
                ->first()            
        ];         
        
        $this->emit('getMeta', $meta);
    }
}
