<?php

namespace App\Http\Livewire;

use App\Models\Submission;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Inbox extends Component
{
    public $letter_type;
    public $submissions;

    public function mount()
    {
        $this->letter_type = '';
        // $this->submissions = DB::table('submissions')->latest()->get();
        $this->submissions = Submission::select(
            'submissions.*',
        )
            ->latest()
            ->get();
        // ->leftJoin('metas', 'metas.submission_id', '=', 'submissions.id');
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
