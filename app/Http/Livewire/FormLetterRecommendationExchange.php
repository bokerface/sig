<?php

namespace App\Http\Livewire;

use App\Lib\CustomNotification;
use App\Models\Submission;
use App\Models\ExchangeInstitution;
use App\Models\Meta;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FormLetterRecommendationExchange extends Component
{

    public $exchange_destination_id;
    public $exchange_destination;
    public $exchange_institution;
    public $exchange_institutions = [];

    public function render()
    {
        if (!empty($this->exchange_destination)) {
            $this->exchange_institutions = ExchangeInstitution::where('destination_id', $this->exchange_destination)->get();
        }

        return view(
            'livewire.form-letter-recommendation-exchange',
            [
                "destinations" => DB::table('exchange_destinations')->latest()->get()
            ]
        )->layout('components.layoutfront');
    }

    public function handleForm()
    {
        $this->validate([
            'exchange_destination' => 'required',
            'exchange_institution' => 'required'
        ]);

        $letter = Submission::create([
            'student_id' => Session::get('user_data.user_id'),
            'submission_type' => 'letter',
            'letter_types' => 1,
            'status' => 0,
        ])->id;

        if ($letter) {

            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'exchange_destination',
                'value' => $this->exchange_destination,

            ]);
            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'exchange_institution',
                'value' => $this->exchange_institution,

            ]);
            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'letter_type',
                'value' => 1, //recommendation exchange

            ]);
            $notification = new CustomNotification;
            $notification->sender = 'System';
            $notification->receiver = "Admin";
            $notification->status = 0;
            $notification->message = "Pengajuan Baru";
            $notification->send_notification();

            $this->dispatchBrowserEvent('insert-success');

            $this->resetInput();
        }
    }

    private function resetInput()
    {
        $this->exchange_destination_id = '';
    }
}
