<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Exchange;
use App\Models\Meta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\WithPagination;

class AdminExchange extends Component
{
    public $ids;
    public $fullname;
    public $student_id;
    public $meta;
    public $click;
    public $search;
    public $paginate = 5;


    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $exchanges = DB::table('exchanges')
                    ->select('exchanges.id', 'exchanges.student_id', 'v_students.fullname', 'exchanges.exchange_type', 'exchanges.created_at', 'exchanges.status')
                    ->leftJoin('v_students', 'exchanges.student_id', '=', 'v_students.studentid')
                    ->latest()->paginate($this->paginate);
        
        return view(
            'livewire.admin.admin-exchange',
            [
                "exchanges" => $this->search === null ?                
                $exchanges:
                DB::table('exchanges')
                    ->select('exchanges.id', 'exchanges.student_id', 'v_students.fullname', 'exchanges.exchange_type', 'exchanges.created_at', 'exchanges.status')
                    ->where('v_students.fullname', 'like', '%'. $this->search .'%')
                    ->orWhere('exchanges.student_id', 'like', '%'. $this->search .'%')
                    ->leftJoin('v_students', 'exchanges.student_id', '=', 'v_students.studentid')
                    ->latest()->paginate($this->paginate),

            ]
        )->layout('components.admin.layouts');        
        
    }

    // $metas = Meta::where(
    //     [
    //         ['post_id', '=', $id],
    //         ['post_type', '=', 'exchange']
    //     ]
    // )
    //     ->get()
    //     ->toArray();

    // $this->metass = $metas;

    public function getMeta($id) 
    {         
        $meta =  [
            'metaContent'=> DB::table('metas')
                ->select('metas.*')
                ->where('post_id', '=', $id)
                ->where('post_type', '=', 'exchange')
                ->get()->toArray(),

            'submission' => DB::table('exchanges')
                ->select('exchanges.id', 'exchanges.student_id', 'v_students.fullname', 'exchanges.exchange_type', 'exchanges.created_at', 'exchanges.status')
                ->where('exchanges.id', '=', $id)
                ->leftJoin('v_students', 'exchanges.student_id', '=', 'v_students.studentid')
                ->first()            
        ];         
        
        $this->emit('getMeta', $meta);}

    
}
