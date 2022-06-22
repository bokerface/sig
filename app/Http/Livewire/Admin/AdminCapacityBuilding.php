<?php

namespace App\Http\Livewire\Admin;

use App\Models\CapacityBuilding;
use App\Models\Submission;
use Livewire\Component;

class AdminCapacityBuilding extends Component
{
    public $capacity_buildings;

    public function mount()
    {
        $this->capacity_buildings = Submission::select(
            'submissions.*',
        )
            ->leftJoin('metas', function ($join) {
                $join->on('metas.submission_id', '=', 'submissions.id');
                $join->where('metas.key', '=', 'letter_type');
            })
            ->leftJoin('letter_types', 'letter_types.id', '=', 'metas.value')
            ->where([
                ['metas.value', '=', 7]
            ])
            ->paginate();

        dd($this->capacity_buildings);
    }

    public function render()
    {
        return view('livewire.admin.admin-capacity-building')->layout('components.admin.layouts');
    }
}
