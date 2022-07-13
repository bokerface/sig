<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithPagination;

class ExchangeInstitution extends Component
{
    public $meta;
    public $click;
    public $search;
    public $paginate = 5;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $institutions = DB::table('exchange_institutions')
            ->select(
                'exchange_institutions.*',
                'exchange_destinations.destination'
            )
            ->leftJoin('exchange_destinations', 'exchange_destinations.id', '=', 'exchange_institutions.destination_id')
            ->paginate($this->paginate);

        return view(
            'livewire.exchange-institution',
            ['institutions' => $institutions]
        )
            ->layout('components.admin.layouts');
    }
}
