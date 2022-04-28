<?php

namespace App\Http\Livewire;

use App\Models\ExchangeDestination;
use App\Models\ExchangeInstitution;
use Livewire\Component;

class AddExchangeInstitution extends Component
{
    public $institution_name;
    public $destination;

    public function render()
    {
        $destinations = ExchangeDestination::all();
        return view(
            'livewire.add-exchange-institution',
            [
                'destinations' => $destinations
            ]
        )
            ->layout('components.admin.layouts');
    }

    public function store()
    {
        $this->validate(
            [
                'institution_name' => 'required|string',
                'destination' => 'required|string'
            ]
        );

        ExchangeInstitution::create([
            'destination_id' => $this->destination,
            'institution' => $this->institution_name,
            'status' => 'active'
        ]);

        return redirect()->to(route('exchange-institution'));
    }
}
