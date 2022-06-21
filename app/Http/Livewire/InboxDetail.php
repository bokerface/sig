<?php

namespace App\Http\Livewire;

use App\Models\Meta;
use App\Models\Submission;
use Illuminate\Support\Facades\Storage;

use Livewire\Component;

class InboxDetail extends Component
{
    public $submission;
    public $metas;

    public function mount($id)
    {
        $this->submission = Submission::findOrFail($id);
        $this->metas = Meta::where('submission_id', '=', $id)->get();
    }

    public function render()
    {
        return view('livewire.inbox-detail')
            ->layout('components.layoutfront');
    }

    public function download($filename)
    {
        return Storage::disk('public')->download($filename);
    }
}
