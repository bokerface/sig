<?php

namespace App\Http\Livewire;

use App\Models\ExchangeDestination;
use App\Models\ExchangeInstitution;
use Livewire\Component;

class EditExchangeInstitution extends Component
{
    public $destinations;
    public $selected_destination;
    public $exchange_institution;
    public $institution_name;
    public $status;

    public function mount($id)
    {
        $this->exchange_institution = ExchangeInstitution::findOrFail($id);

        $this->institution_name = $this->exchange_institution->institution;
        $this->selected_destination = $this->exchange_institution->destination_id;
        $this->destinations = ExchangeDestination::all();
        $this->status = $this->exchange_institution->status == 'active' ? $this->exchange_institution->status : '';

        // dd($this->status);
    }

    public function render()
    {
        return view('livewire.edit-exchange-institution')->layout('components.admin.layouts');
    }

    public function update()
    {
        $this->exchange_institution->institution = $this->institution_name;
        $this->exchange_institution->destination_id = $this->selected_destination;
        $this->exchange_institution->status = $this->status == true ? 'active' : 'inactive';
        $this->exchange_institution->save();
    }
}
