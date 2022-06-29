<?php

namespace App\Http\Livewire;

use App\Lib\CustomNotification;
use App\Models\Meta;
use App\Models\Submission;
use App\Models\Supervisor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class DocumentStatus extends Component
{
    use WithFileUploads;

    public $select_verified;
    public $submission_id;
    public $status;
    public $verification_file;
    public $document_verified;
    public $verification_file_exist;
    public $submission_type;
    public $letter_type;
    public $supervisor_list;
    public $letter_number_empty;
    public $year_of_academic_empty;

    public $letter_number;
    public $year_of_academic;
    public $upload_verification_file;
    public $selected_supervisor;

    protected $listeners = [
        'reload' => '$refresh'
    ];

    public function mount()
    {
        $this->verification_file_exist = !empty(Submission::findOrFail($this->submission_id)->additional_file);
        $this->select_verified = $this->status;
        $this->submission_type = Submission::findOrFail($this->submission_id)->submission_type;
        $this->letter_type = Submission::findOrFail($this->submission_id)->letter_types;
        $this->supervisor_list = Supervisor::all();
        $this->letter_number_empty = empty(Meta::where([
            ['submission_id', '=', $this->submission_id],
            ['key', '=', 'letter_number']
        ])
            ->first());
        $this->year_of_academic_empty = empty(Meta::where([
            ['submission_id', '=', $this->submission_id],
            ['key', '=', 'year_of_academic']
        ])
            ->first());

        // dd($this->select_verified);
        // dd($this->verification_file_exist);
    }

    public function render()
    {
        if (!empty(Submission::find($this->submission_id)->additional_file)) {
            $this->document_verified = true;
            $this->verification_file = Submission::find($this->submission_id)->additional_file;
        }

        return view('livewire.document-status');
    }

    public function verify($submission_id)
    {
        $this->validate([
            'select_verified' => "required|numeric|in:1,2"
            // 'select_verified' => "required|numeric"
        ]);

        // dd($submission_id);

        $submission = Submission::findOrFail($submission_id);
        $submission->status = $this->select_verified;
        $submission->save();
        $this->status = $submission->status;

        $notification = new CustomNotification;
        $notification->sender = 'Admin';
        $notification->receiver = $submission->student_id;
        $notification->status = 0;
        if ($this->select_verified == 1) {
            $notification->message = "Diterima";
        } else {
            $notification->message = "Ditolak";
        }
        $notification->send_notification();

        $this->emit('setStatus', $submission->status);
        $this->emitSelf('reload');
        $this->emit('reload');
    }

    public function verify_with_file($id_submission)
    {
        $this->validate([
            'upload_verification_file' => 'required|file|mimes:pdf'
        ]);

        // dd($this->upload_verification_file);

        $upload_verification_file_name = $this->upload_verification_file->store('verification_file', 'public');
        $submission = Submission::findOrFail($id_submission);
        $submission->additional_file = $upload_verification_file_name;
        $submission->save();
        $this->emitSelf('reload');
    }

    public function download_verification_file($filename)
    {
        // dd($filename);
        return Storage::disk('public')->download($filename);
    }

    public function verify_recommendation_for_exchange($id_submission)
    {
        $this->validate([
            'letter_number' => 'string|required',
            'year_of_academic' => 'string|required'
        ]);

        Meta::create(
            [
                'submission_id' => $id_submission,
                'key' => 'letter_number',
                'value' => $this->letter_number
            ]
        );

        Meta::create(
            [
                'submission_id' => $id_submission,
                'key' => 'year_of_academic',
                'value' => $this->year_of_academic
            ]
        );

        Meta::create(
            [
                'submission_id' => $id_submission,
                'key' => 'letter_publish_date',
                'value' => Carbon::now()
            ]
        );
    }

    public function verify_recommendation_for_passport($id_submission)
    {
        $this->validate([
            'letter_number' => 'string|required',
        ]);

        Meta::create(
            [
                'submission_id' => $id_submission,
                'key' => 'letter_number',
                'value' => $this->letter_number
            ]
        );
    }

    public function verify_secondary_supervisor($id_submission)
    {
        $this->validate([
            'selected_supervisor' => 'exists:supervisors,id'
        ]);

        Meta::create(
            [
                'submission_id' => $id_submission,
                'key' => 'supervisor',
                'value' => $this->selected_supervisor
            ]
        );
    }
}
