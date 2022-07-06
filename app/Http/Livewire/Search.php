<?php

namespace App\Http\Livewire;

use App\Models\LetterType;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Search extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];
    public $letter_type;
    // public $submissions;
    public $search;

    public function render()
    {
        // dd(session('user_data'));
        return view(
            'livewire.search',
            [
                'submissions' => LetterType::select(
                    'letter_types.*'
                )
                    ->when(!empty($this->search), function ($query) {
                        return $query->where('letter_types.name', 'LIKE', '%' . $this->search . '%');
                    })
                    ->latest()
                    ->get()
            ]
        )
            ->layout('components.layoutfront');
    }


}
