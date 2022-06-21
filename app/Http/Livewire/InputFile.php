<?php

namespace App\Http\Livewire;

use App\Models\Meta;
use App\Models\Submission;
use Livewire\Component;
use Livewire\WithFileUploads;

class InputFile extends Component
{
    use WithFileUploads;

    public $item;

    public $value;
    public $label;
    public $key;
    public $id_field;

    protected $rules = [
        // 'value' => 'required|file|mimes:pdf'
    ];

    public function render()
    {
        return view('fields.input-type-file');
    }

    public function update($meta_id)
    {
        // $this->validate();

        $meta = Meta::findOrFail($meta_id);

        $value = $this->value->store('files', 'public');

        $meta->value = $value;
        $meta->comment = null;
        $meta->save();
        // dd($meta);
        $commented_meta = Meta::where([
            ['submission_id', '=', $meta->submission_id],
            ['comment', '!=', null]
        ])->count();

        if ($commented_meta > 0) {
            $this->emit('reload');
        } else {
            $submission = Submission::findOrFail($meta->submission_id);
            $submission->status = 0;
            $submission->save();
            return redirect()->to(route('inboxdetail', $meta->submission_id));
        }
        // dd($this->value);
    }
}
