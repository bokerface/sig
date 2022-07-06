<?php

namespace App\Http\Livewire;

use App\Models\ExchangeDestination;
use Livewire\Component;

class AddExchangeDestination extends Component
{
    public $destination_country;

    public function render()
    {
        return view('livewire.add-exchange-destination')
            ->layout('components.admin.layouts');
    }

    public function store()
    {
        $this->validate(
            [
                'destination_country' => 'required|string',
            ]
        );

        // ExchangeInstitution::create([
        //     'destination_id' => $this->destination,
        //     'institution' => $this->institution_name,
        //     'status' => 'active'
        // ]);

        ExchangeDestination::create([
            'destination' => $this->destination_country,
            'status' => 1
        ]);

        return redirect()->to(route('exchange-destination'));
    }
}
