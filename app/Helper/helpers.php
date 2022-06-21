<?php

use App\Http\Livewire\InputTypeFile;
use App\Models\Notification;

function notif_number()
{
    $notification = Notification::where([
        ['receiver', '=', session('user_data')['user_id']],
        ['message', '=', 'Diterima']
    ])->count();
    return $notification;
}

// function fields($item)
// {
//     if ($item->type == 'text') {
//         if (!empty($item->comment)) {
//             return view('fields.input-type-text', ['item' => $item]);
//         }
//     } elseif ($item->type == 'file') {
//         if (!empty($item->comment)) {
//             // return view('fields.input-type-file', ['item' => $item]);
//             return InputTypeFile::class;
//         }
//     }
// }
