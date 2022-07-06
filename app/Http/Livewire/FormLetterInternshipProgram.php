<?php

namespace App\Http\Livewire;

use App\Lib\CustomNotification;
use App\Models\Submission;
use App\Models\Meta;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FormLetterInternshipProgram extends Component
{
    public $company_destination;
    public $company_division;
    public $start_date;
    public $end_date;
    public $your_mobile;
    public function render()
    {
        return view('livewire.form-letter-internship-program')->layout('components.layoutfront');
    }

    public function handleForm()
    {
        $this->validate([
            'company_destination' => 'required',
            'company_division' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'your_mobile' => 'required',
        ]);

        $letter = Submission::create([
            'student_id' => Session::get('user_data.user_id'),
            'submission_type' => 'letter',
            'letter_types' => 4,
            'status' => 0,
        ])->id;

        if ($letter) {

            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'company_destination',
                'value' => $this->company_destination,
            ]);
            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'company_division',
                'value' => $this->company_division,
            ]);
            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'start_date',
                'value' => $this->start_date,
            ]);
            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'end_date',
                'value' => $this->end_date,
            ]);
            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'your_mobile',
                'value' => $this->your_mobile,
            ]);
            $meta = Meta::create([
                'submission_id' => $letter,
                'key' => 'letter_type',
                'value' => 4, //recommendation exchange
            ]);

            $notification = new CustomNotification;
            $notification->sender = 'System';
            $notification->receiver = "Admin";
            $notification->status = 0;
            $notification->message = "Pengajuan Baru";
            $notification->send_notification();

            $this->dispatchBrowserEvent('insert-success');
        }
    }
}
