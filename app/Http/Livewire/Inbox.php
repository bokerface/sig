<?php

namespace App\Http\Livewire;

use App\Models\Submission;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Inbox extends Component
{
    public $letter_type;
    public $submissions;
    // public $search;

    public function mount()
    {
        $this->letter_type = '';
        // $this->submissions = DB::table('submissions')->latest()->get();
        $this->submissions = Submission::select(
            'submissions.*',
            'letter_types.name as letter_type'
        )
            ->leftJoin('letter_types', 'letter_types.id', '=', 'submissions.letter_types')
            // ->when(!empty($search), function ($query) {
            // return $query->where('letter_types.name', 'likes', '%' . $this->search . '%');
            // })
            ->latest()
            ->get();


        // $this->submissions = Submission::select(
        //     'submissions.*',
        //     'metas.key',
        //     'metas.value',
        //     'letter_types.name as letter_type',
        // )
        //     ->leftJoin('metas', function ($join) {
        //         $join->on('metas.submission_id', '=', 'submissions.id');
        //         $join->where('metas.key', '=', 'letter_type');
        //     })
        //     ->leftJoin('letter_types', 'letter_types.id', '=', 'metas.value')
        //     ->latest()
        //     ->get();

        // dd($this->submissions);
    }

    public function render()
    {
        // dd(session('user_data'));
        return view('livewire.inbox')
            ->layout('components.layoutfront');
    }

    public function siapi()
    {
        echo "api";
    }
}
