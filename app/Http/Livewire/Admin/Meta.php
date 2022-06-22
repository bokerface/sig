<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Meta extends Component
{
    public $metas;
    public $click;
    public $submission;
    public $select_verified;
    public $verified;
    public $comment;
    public $status;

    protected $listeners = [
        'getMeta' => 'showMeta',
        'reload' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.admin.meta');
        $this->emit('reload');
    }

    public function showMeta($meta)
    {
        // dd($meta);
        $this->click = true;
        $this->metas = $meta['metaContent'];
        $this->submission = $meta['submission'];
        $this->status = $meta['status'];
    }

    public function verifyField($id)
    {
        // dd($this->comment);
        $validateData = $this->validate([
            'comment' => 'required'
        ]);

        $update = DB::table('metas')
            ->where('id', $id)
            ->update(['verified' => 1, 'comment' => $validateData['comment']]);

        if ($update) {
            $this->dispatchBrowserEvent('alert');
        }
    }

    // public function verify($id)
    // {

    //     $validateData = $this->validate([
    //         'select_verified' => 'required'
    //     ]);

    //     $update = DB::table('submissions')
    //         ->where('id', $id)
    //         ->update(['status' => $validateData['select_verified']]);

    //     if ($update) {
    //         $this->dispatchBrowserEvent('alert');
    //     }
    // }

    public function download($filename)
    {
        // dd($filename);
        return Storage::disk('public')->download($filename);
    }

    public function image($filename)
    {
        // dd($filename);
        return Storage::disk('public')->download($filename);
    }
}
