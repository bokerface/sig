<?php

namespace App\Http\Livewire;

use App\Models\Supervisor as ModelsSupervisor;
use Livewire\Component;
use Livewire\WithPagination;

class Supervisor extends Component
{
    public $paginate = 5;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $supervisors = ModelsSupervisor::paginate($this->paginate);
        return view('livewire.supervisor', [
            'supervisors' => $supervisors
        ])->layout('components.admin.layouts');
    }
}
