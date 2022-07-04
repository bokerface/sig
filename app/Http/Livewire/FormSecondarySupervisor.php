<?php

namespace App\Http\Livewire;

use App\Lib\CustomNotification;
use Livewire\Component;
use App\Models\Submission;
use App\Models\Meta;
use Illuminate\Support\Facades\Session;
use Livewire\WithFileUploads;

class FormSecondarySupervisor extends Component
{
    public $thesis;
    public $proof;
    public $title;

    use WithFileUploads;

    public function render()
    {
        return view('livewire.form-secondary-supervisor')
            ->layout('components.layoutfront');
    }

    public function handleForm()
    {
        $validateData = $this->validate([
            'thesis' => 'required|file|mimes:docx'
        ]);

        $thesis = $this->thesis->store('files', 'public');
        $validateData['thesis'] = $thesis;

        $proof = $this->proof->store('files', 'public');
        $validateData['proof'] = $proof;

        $submission = Submission::create([
            'student_id' => Session::get('user_data.user_id'),
            'submission_type' => 'secondary_supervisor',
            'letter_types' => 13,
            'status' => 0,
        ])->id;

        if ($submission) {

            Meta::create([
                'submission_id' => $submission,
                'key' => 'thesis',
                'value' => $thesis,
            ]);

            Meta::create([
                'submission_id' => $submission,
                'key' => 'proof',
                'value' => $proof,
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
        $this->thesis = '';
        $this->proof = '';
    }
}
