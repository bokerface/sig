<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Exchange;
use App\Models\Meta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminExchange extends Component
{
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

        $metas = Meta::where(
            [
                ['post_id', '=', $id],
                ['post_type', '=', 'exchange']
            ]
        )
            ->get()
            ->toArray();

        $this->metass = $metas;
        // dd($metas);
    }

    public function download($filename)
    {
        // dd($param);
        return Storage::disk('public')->download($filename);
    }

    public function render()
    {
        return view(
            'livewire.admin.admin-exchange',
            [
                "exchanges" => DB::table('exchanges')
                    ->select('exchanges.id', 'exchanges.student_id', 'v_students.fullname', 'exchanges.exchange_type', 'exchanges.created_at', 'exchanges.status')
                    // ->where('exchanges.id', '=', $id)
                    ->leftJoin('v_students', 'exchanges.student_id', '=', 'v_students.studentid')
                    ->latest()->get(),
            ]
        )->layout('components.admin.layouts');
    }
}
