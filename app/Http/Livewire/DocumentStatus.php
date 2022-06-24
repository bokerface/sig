<?php

namespace App\Http\Livewire;

use App\Lib\CustomNotification;
use App\Models\Submission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class DocumentStatus extends Component
{
    use WithFileUploads;

    public $select_verified;
    public $submission_id;
    public $status;
    public $upload_verification_file;
    public $verification_file;
    public $document_verified;
    public $verification_file_exist;
    public $submission_type;
    public $letter_type;

    protected $listeners = [
        'reload' => '$refresh'
    ];

    public function mount()
    {
        $this->verification_file_exist = !empty(Submission::findOrFail($this->submission_id)->additional_file);
        $this->select_verified = $this->status;
        $this->submission_type = Submission::findOrFail($this->submission_id)->submission_type;
        $this->letter_type = Submission::findOrFail($this->submission_id)->letter_types;
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

    public function upload_document($id_submission)
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
}
