<?php

namespace App\Http\Livewire\Admin;

use App\Models\CapacityBuilding;
use App\Models\Submission;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCapacityBuilding extends Component
{
    public $search;
    public $paginate = 5;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    // public $capacity_buildings;

    public function mount()
    {
        // $this->capacity_buildings = Submission::select(
        //     'submissions.*',
        //     'v_students.fullname'
        // )
        //     ->leftJoin('v_students', 'v_students.studentid', '=', 'submissions.student_id')
        //     ->wherein('letter_types', [7, 8, 9, 10, 11, 12])
        //     ->latest()
        //     ->paginate($this->paginate);

        // dd($this->capacity_buildings);
    }

    public function render()
    {
        return view(
            'livewire.admin.admin-capacity-building',
            [
                'capacity_buildings' => Submission::select(
                    'submissions.*',
                    'v_students.fullname',
                    'letter_types.name as letter_type'
                )
                    ->leftJoin('v_students', 'v_students.studentid', '=', 'submissions.student_id')
                    ->leftJoin('letter_types', 'letter_types.id', '=', 'submissions.letter_types')
                    ->wherein('letter_types', [7, 8, 9, 10, 11, 12])
                    ->latest()
                    ->paginate($this->paginate)
            ]
        )
            ->layout('components.admin.layouts');
    }
}
