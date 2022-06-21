<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Comment extends Component
{
    public $comment;
    public $comment_value;
    public $field_id;

    public function render()
    {
        return view('livewire.comment');
    }

    public function verifyField($field_id)
    {
        // dd($this->comment);
        $validateData = $this->validate([
            'comment' => 'required'
        ]);

        $update = DB::table('metas')
            ->where('id', $field_id)
            ->update(['verified' => 1, 'comment' => $validateData['comment']]);

        if ($update) {
            $this->dispatchBrowserEvent('alert');
        }
    }
}
