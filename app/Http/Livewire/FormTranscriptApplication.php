<?php

namespace App\Http\Livewire;

use App\Lib\CustomNotification;
use App\Models\Submission;
use Illuminate\Support\Facades\Session;
use App\Models\Meta;
use Carbon\Carbon;

use Livewire\Component;

class FormTranscriptApplication extends Component
{
    public function render()
    {
        return view('livewire.form-transcript-application')
            ->layout('components.layoutfront');
    }

    public function handleForm()
    {

        $letter = Submission::create([
            'student_id' => Session::get('user_data.user_id'),
            'submission_type' => 'transcript',
            'letter_types' => 14,
            'status' => 0,
        ])->id;

        if ($letter) {
            Meta::create(
                [
                    'submission_id' => $letter,
                    'key' => 'letter_publish_date',
                    'value' => Carbon::now()
                ]
            );
            $notification = new CustomNotification;
            $notification->sender = 'System';
            $notification->receiver = "Admin";
            $notification->status = 0;
            $notification->message = "Pengajuan Baru";
            $notification->send_notification();
        }

        return redirect('download-transcript/' . $letter);
    }
}
