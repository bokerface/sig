<?php

namespace App\Http\Livewire;

use App\Models\ExchangeDestination as ModelsExchangeDestination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithPagination;

class ExchangeDestination extends Component
{
    public $meta;
    public $click;
    public $search;
    public $paginate = 5;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        // $institutions = DB::table('exchange_institutions')
        //     ->leftJoin('exchange_destinations', 'exchange_destinations.id', '=', 'exchange_institutions.destination_id')
        //     ->paginate($this->paginate);

        $destinations = ModelsExchangeDestination::paginate($this->paginate);

        return view(
            'livewire.exchange-destination',
            ['destinations' => $destinations]
        )
            ->layout('components.admin.layouts');
    }
}
